<?php

namespace Dulabs\IakApiPHP\Exceptions;

class MissingArguements extends BaseException
{
    public function setMessage()
    {
        return 'Missing arguements exception. Content fields must be complete';
    }
}
