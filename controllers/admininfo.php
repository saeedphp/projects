<?php

class admininfo extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $projectInfo=$this->model->projectInfo();

        $data=[
            'projectInfo'=>$projectInfo
        ];
        $this->view('admin/info/index',$data,1,1);

    }

}

?>