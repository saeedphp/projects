<?php

class Myform extends Controller{

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

        $form=$this->model->getForm();

        $data=[
            'form'=>$form
        ];

        $this->view('panel/myform/index',$data);

    }

}

?>