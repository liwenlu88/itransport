<?php

namespace App\Exceptions;

use Exception;

class NotAuthorizedException extends Exception
{
    public function __construct($message = '您无权访问')
    {
        parent::__construct($message, 403);
    }

    public function render($request)
    {
        return response()->json([
            'code' => 403,
            'message' => $this->getMessage()
        ], 403);
    }
}
