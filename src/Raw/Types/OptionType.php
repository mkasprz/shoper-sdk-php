<?php

namespace Shoper\Sdk\Rest\Types;

enum OptionType: string
{
    case File = "file";
    case Text = "text";
    case Radio = "radio";
    case Select = "select";
    case Checkbox = "checkbox";
    case Color = "color";
    case Denomination = "denomination";
}
