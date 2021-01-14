<?php

class Adminlogin extends Controller{

    public $checkLogin='';

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $check=Model::sessionGet('userId');
        if ($check==true){
            header('location:'.URL.'admindashboard');
        }
    }

    function index(){

        $this->view('admin/login/index',[],1,1);

    }

    function check(){

        $form=$_POST;
        $this->model->checkUser($form);
        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if ($check==false){
            header('location:'.URL.'adminlogin');
        }else{
            header('location:'.URL.'admindashboard');
        }

    }

}

?>