<?php
session_start();

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;

class LoginController extends BaseController
{
    public function index()
    {
        $this->view("login/login.php", []);

    }

    public function login()
    {


        $email = Request::getParam('email');
        $password = Request::getParam('password');
        $fields = ['email', 'password'];
        $values = [$email, $password];

        DB::table('users')->login($fields, $values);
        $get = DB::table("users")->get();

        $userName = strstr($email, "@", true);
        foreach ($get as $item) {
            if (!empty($email) && !empty($password)) {

                $_SESSION["emailUser"] = $userName;
                if ($password === $item['password'] && $email === $item['email']) {

                    $_SESSION["useID"] = $item['id'];
                    $_SESSION["emailUser1"] = $userName;

                    $this->redirect('../panel/index');



                    } else {
                    $this->index();
                    $_SESSION["error"] = "user name or password is invalid";



                }
            } else {

                $this->index();
                $_SESSION['isEmpty'] = "username and password is empty";

            }
        }

    }


}
