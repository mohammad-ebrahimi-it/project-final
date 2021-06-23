<?php

use App\Http\BaseController;
use App\Models\DB;
use App\Http\Request;

class OrderController extends BaseController
{

    public function index()
    {
        $get = DB::table("trainer")->get();
        $this->view("order/index.php", ['get' => $get]);
    }

    public function set_trainer()
    {

        $trainerId = Request::getParam('id');
        $userEmail = Request::getParam('user_id');
        $values = [$userEmail, $trainerId];
        $fields = ["user_id", "trainer_id"];
        DB::table("plan")->add($fields, $values);
        $this->redirect('../panel/index');
    }

}