<?php

class Status extends Controller{

    public function __construct()
    {
        parent::__construct();
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