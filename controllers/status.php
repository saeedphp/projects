<?php

class Status extends Controller{

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

        $projectInfo=$this->model->getProjectInfo();

        $data=[
            'projectInfo'=>$projectInfo
        ];

        $this->view('panel/status/index',$data);

    }

}

?>