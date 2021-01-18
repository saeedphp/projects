<?php

class register extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('register/index');

    }

    function check(){

        if (isset($_POST['email'])){
            $this->model->addUser($_POST);
        }

    }

}

?>