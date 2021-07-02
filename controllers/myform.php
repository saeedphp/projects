<?php

class Myform extends Controller{

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

    function index($id=''){

        $form=$this->model->getForm();
        $social=$this->model->getSocial();
        $formInfo=$this->model->formInfo($id);

        $data=[
            'form'=>$form,
            'social'=>$social,
            'formInfo'=>$formInfo
        ];

        $this->view('panel/myform/index',$data);

    }

    function form($id){

        $formInfo=$this->model->formInfo($id);

        $data=[
            'formInfo'=>$formInfo
        ];

        $this->view('panel/myform/form',$data);

    }

}

?>