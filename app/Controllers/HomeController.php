<?php
session_start();

use App\Http\BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $this->view("home/index.php", []);
        $this->layout("home",);
    }
}