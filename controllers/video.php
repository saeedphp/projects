<?php

class Video extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin=Model::sessionGet('userId');
        if ($this->checkLogin==false){
            header('location:'.URL.'login');
        }
    }

    function index($projectId=''){

        $projectInfo=$this->model->getProjectInfo();

        $data=[
            'projectInfo'=>$projectInfo
        ];

        $this->view('panel/video/index',$data);

    }

    function video($projectId){

        $video=$this->model->getVideo($projectId);

        $data=[
            'video'=>$video,
        ];

        $this->view('panel/video/video',$data);

    }

}

?>