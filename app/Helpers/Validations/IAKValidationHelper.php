<?php

namespace Dulabs\IakApiPHP\Helpers\Validations;

use Dulabs\IakApiPHP\Exceptions\InvalidContentType;
use Dulabs\IakApiPHP\Exceptions\MissingArguements;

class IAKValidationHelper
{
    public static function isContentTypeArray($content)
    {
        return is_array($content);
    }

    public static function getMissingFields($content, $fields)
    {
        return array_values(array_diff($fields, array_keys($content)));
    }

    public static function validateContentType($content)
    {
        if (!self::isContentTypeArray($content)) {
            throw new InvalidContentType();
        }
    }

    public static function validateContentFields($content, $fields)
    {
        $missingFields = self::getMissingFields($content, $fields);

        if (!empty($missingFields)) {
            throw new MissingArguements('Field ' . $missingFields[0] . ' is missing');
        }
    }
}