<?php

declare(strict_types=1);

namespace Shoper\Sdk;

/**
 * @implements \Iterator<int, mixed>
 */
final class Paginator implements \Iterator
{
    /** @var callable(array<string, mixed>): array<string, mixed> */
    private $fetchFn;
    private int $limit;
    /** @var array<string, mixed> */
    private array $extraParams;
    private int $page = 1;
    /** @var array<int, mixed>|null */
    private ?array $currentList = null;
    private int $currentIndex = 0;
    private int $totalPages = 1;

    /**
     * @param callable(array<string, mixed>): array<string, mixed> $fetchFn
     * @param array<string, mixed> $extraParams
     */
    public function __construct(callable $fetchFn, int $limit = 50, array $extraParams = [])
    {
        $this->fetchFn = $fetchFn;
        $this->limit = $limit;
        $this->extraParams = $extraParams;
    }

    private function fetchPage(): void
    {
        $params = array_merge($this->extraParams, ['page' => $this->page, 'limit' => $this->limit]);
        $result = ($this->fetchFn)($params);
        $this->currentList = $result['list'] ?? [];
        $this->totalPages = $result['pages'] ?? 1;
        $this->currentIndex = 0;
    }

    public function current(): mixed
    {
        return $this->currentList[$this->currentIndex] ?? null;
    }

    public function key(): int
    {
        return ($this->page - 1) * $this->limit + $this->currentIndex;
    }

    public function valid(): bool
    {
        return $this->currentList !== null
            && isset($this->currentList[$this->currentIndex]);
    }

    public function next(): void
    {
        $this->currentIndex++;
        if ($this->currentList !== null
            && $this->currentIndex >= count($this->currentList)
            && $this->page < $this->totalPages) {
            $this->page++;
            $this->fetchPage();
        }
    }

    public function rewind(): void
    {
        $this->page = 1;
        $this->fetchPage();
    }
}
