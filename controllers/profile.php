<?php

class profile extends Controller{

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

        $this->view('panel/profile/index');

    }

}

?>