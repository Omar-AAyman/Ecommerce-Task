<?php

namespace App\Http\Requests;


class GetErrors
{
    public static function Message($message)
    {
        return ucwords(str_replace('_',' ', $message));
    }
}
