<?php

class Tech extends Controller{

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

    function index($idproject){

        $tech=$this->model->getTech($idproject);

        $data=[
            'tech'=>$tech,
        ];

        $this->view('panel/tech/index',$data);

    }

}

?>