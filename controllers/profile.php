<?php

class profile extends Controller{

    public $checkLogin='';

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin=Model::sessionGet('userId');
        if ($this->checkLogin==false){
            header('location:'.URL.'login');
        }
    }

    function index(){

        $userInfo=$this->model->getUserInfo();

        $data=[
            'userInfo'=>$userInfo
        ];

        $this->view('panel/profile/index',$data);

    }

    function editprofile(){

        $userInfo=$this->model->getUserInfo();

        $data=[
            'userInfo'=>$userInfo
        ];

        $this->view('panel/profile/edit',$data);

    }

    function edituserprofile(){

        $data=$_POST;
        $this->model->editUserProfile($data);

    }

    function changepass(){

        if (isset($_POST['password_old'])){
            $data=$_POST;
            $this->model->changePass($data);
        }

        $this->view('panel/profile/changepass');

    }

}

?>