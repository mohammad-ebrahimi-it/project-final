<?php


namespace App\Http;


class Request
{
    public static function getParam($request)
    {
        return $_POST[$request] ?? $_GET[$request];
    }
}