<?php

if (!function_exists('replaceSymbols')) {
    /**
     * Заменить все, кроме букв
     *
     * @param $string
     * @return string
     */
    function replaceSymbols($string)
    {
        return mb_strtolower(trim(preg_replace('#[^A-zА-я0-9]#u', '', $string)));
    }
}
