<?php

class Adminprofile extends Controller{

    public $checkLogin='';

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin=Model::sessionGet('userId');
        if ($this->checkLogin==false){
            header('location:'.URL.'adminlogin');
        }
    }

    function index(){

        $userInfo=$this->model->getUserInfo();

        $data=[
            'userInfo'=>$userInfo
        ];

        $this->view('admin/profile/index',$data,1,1);

    }

    function edituserprofile(){

        $data=$_POST;
        $this->model->editUserProfile($data);

    }

    function changepass(){

        if (isset($_POST['password_old'])){
            $this->model->changePass($_POST);
        }

    }

}

?>