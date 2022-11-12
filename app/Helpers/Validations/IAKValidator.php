<?php

namespace Dulabs\IakApiPHP\Helpers\Validations;

class IAKValidator
{
    public static function validateCredentialRequest($request)
    {
        IAKValidationHelper::validateContentType($request);
    }
}