<?php
session_start();
use App\Http\Request;
use App\Http\BaseController;
use App\Models\DB;
class RegisterController extends BaseController
{
    public function index()
    {
        $this->view("register/index.php", []);
    }

    public function register()
    {
        $firstName = Request::getParam('first_name');
        $lastName = Request::getParam('last_name');
        $emil = Request::getParam('email');
        $password = Request::getParam('password');
        $passwordRepeat = Request::getParam('password_repeat');

//        $password1 = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
//        $passwordRepeat1 = password_hash($passwordRepeat, PASSWORD_BCRYPT, array('cost' => 12));

        $fields = ['first_name', 'last_name', 'email', 'password', 'password_repeat'];
        $values = [$firstName, $lastName, $emil, $password, $passwordRepeat];
        if (!empty($firstName) && !empty($lastName) && !empty($emil) && !empty($password)){

            if ($password == $passwordRepeat){
                DB::table('users')->add($fields, $values);
                $this->redirect('../login/index');
            }
            else{
                $this->index();
            }

        }else {
            $_SESSION["isEmpty"] = "the all fields are empty";
            $this->redirect('index');
        }



    }

}