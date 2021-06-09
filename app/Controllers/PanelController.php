<?php
session_start();

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;


class PanelController extends BaseController
{

    public function index()
    {
        $getPlan = DB::table('plan')->get();
        $getTrainer = DB::table('trainer')->get();
        $getUser = DB::table('users')->get();

        $this->view('panel/index.php', ['get_user' => $getUser, 'get_trainer' => $getTrainer, 'get_plan' => $getPlan]);
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $this->redirect('../login/index');
    }

    public function delete_items()
    {
        $value = Request::getParam('delete');
        if(!empty($value)){

            $field = ['id'];
            DB::table('plan')->delete('id', $value);
            $this->redirect('index');
        }else{
            $_SESSION["check_select"] = "لطفا یک مورد انتخاب کنید !";
            $this->redirect('index');

        }


    }

    public function api_delete($id)
    {
        $get = DB::table('plan')
            ->delete('id', [$id]);
            echo $id;

    }

}