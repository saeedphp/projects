<?php

class login extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('login/index');

    }

    function check(){

        $form=$_POST;
        $this->model->checkUser($form);
        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if ($check==false){
            header('location:'.URL.'login');
        }else{
            header('location:'.URL.'profile');
        }

    }

}

?>