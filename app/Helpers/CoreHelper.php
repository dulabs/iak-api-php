<?php

namespace Dulabs\IakApiPHP\Helpers;

class CoreHelper
{
    public static function isStringContainsString($haystack, $needle)
    {
        return stripos($haystack, $needle) !== false;
    }
}