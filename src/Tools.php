<?php


namespace Seleda\Dbeasy;


class Tools
{
    public static function strpos($str, $find, $offset = 0, $encoding = 'UTF-8')
    {
        if (function_exists('mb_strpos')) {
            return mb_strpos($str, $find, $offset, $encoding);
        }

        return strpos($str, $find, $offset);
    }

    public static function nl2br($str)
    {
        return str_replace(["\r\n", "\r", "\n", PHP_EOL], '<br />', $str);
    }
}