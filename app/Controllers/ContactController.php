<?php

use App\Http\BaseController;
use App\Models\DB;
use App\Http\Request;
class ContactController extends BaseController
{
    public function index()
    {
        $get = DB::table("test_user")->get();

        $this->view("contact/index",['get'=>$get]);


    }

    public function add_user()
    {
        $firstName = Request::getParam('first_name');
        $lastName = Request::getParam('last_name');
        $email = Request::getParam('email');
        $telephone = Request::getParam('telephone');

        $fields = ['first_name', 'last_name','email','telephone'];
        $values = [$firstName, $lastName, $email, $telephone];
        DB::table("test_user")->add($fields, $values);
        $this->redirect('index');
    }

    public function delete_user()
    {
        $items = Request::getParam('items');
        DB::table('test_user')->delete('id', $items);
        $this->redirect('index');
    }
}