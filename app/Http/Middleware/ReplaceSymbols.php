<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ReplaceSymbols extends TransformsRequest
{
    /**
     * Replace symbols in given value.
     *
     * @param  string $key
     * @param  mixed $value
     *
     * @return mixed
     */
    protected function transform($key, $value)
    {
        return is_string($value) ? $this->replace($value) : $value;
    }

    protected function replace($string)
    {
        return preg_replace('#[^A-zА-я0-9]#u', '', $string);
    }
}
