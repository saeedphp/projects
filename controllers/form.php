<?php

class Form extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin=Model::sessionGet('userId');
        if ($this->checkLogin==false){
            header('location:'.URL);
        }
    }

    function index(){

        if (isset($_POST['name'])){
            $this->model->addForm($_POST,$_FILES['logo'],$_FILES['guideline']);
        }

        $social=$this->model->getSocial();

        $data=[
            'social'=>$social,
        ];

        $this->view('form/index',$data);

    }

}

?>