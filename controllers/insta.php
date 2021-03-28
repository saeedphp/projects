<?php

class Insta extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $visit=Model::visit();
        if (isset($_POST['name'])){
            $this->model->addInsta($_POST);
        }

        $this->view('insta/index');

    }

}

?>