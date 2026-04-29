<?php

declare(strict_types=1);

namespace Shoper\Sdk;

use Psr\Http\Message\ResponseInterface;

final class RateLimitHandler
{
    private int $maxRetries;
    private int $baseDelayMs;

    public function __construct(int $maxRetries = 5, int $baseDelayMs = 1000)
    {
        $this->maxRetries = $maxRetries;
        $this->baseDelayMs = $baseDelayMs;
    }

    /**
     * Executes a request closure and retries on HTTP 429.
     * Closure MUST return Psr\Http\Message\ResponseInterface.
     * Honors Retry-After header (seconds); falls back to exponential backoff when absent.
     */
    public function executeRequest(\Closure $fn): ResponseInterface
    {
        $attempt = 0;
        while (true) {
            $response = $fn();
            if (!$response instanceof ResponseInterface) {
                throw new \LogicException('Closure must return Psr\Http\Message\ResponseInterface');
            }
            if ($response->getStatusCode() !== 429 || $attempt >= $this->maxRetries) {
                return $response;
            }
            $delayMs = $this->computeDelay($response, $attempt);
            usleep($delayMs * 1000);
            $attempt++;
        }
    }

    private function computeDelay(ResponseInterface $response, int $attempt): int
    {
        $retryAfter = $response->getHeaderLine('Retry-After');
        if ($retryAfter !== '' && ctype_digit($retryAfter)) {
            return ((int) $retryAfter) * 1000;
        }
        return $this->baseDelayMs * (2 ** $attempt);
    }
}
