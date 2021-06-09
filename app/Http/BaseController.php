<?php


namespace App\Http;
use App\Http\Config;


class BaseController
{
    public function view($view, array $data)
    {
        return require_once Config::RESOURCES_PATH . $view ;
    }

    public function layout($content)
    {
        $get = file_get_contents(Config::LAYOUT_PATH . "layout.php");
        print str_replace("{content}", $content, $get);
    }

    public function redirect($resource)
    {
        return header("location:{$resource}");
    }
}