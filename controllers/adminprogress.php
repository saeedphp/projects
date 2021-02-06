<?php

class adminprogress extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }
    }

    function index($id=''){

        $progress=$this->model->getProgress();
        $project=$this->model->getProject();
        $progressInfo=$this->model->progressInfo($id);
        $status=$this->model->getStatus();
        $getTech=$this->model->getTech();

        $data=[
            'progress'=>$progress,
            'projectType'=>$project,
            'progressInfo'=>$progressInfo,
            'status'=>$status,
            'tech'=>$getTech
        ];

        $this->view('admin/progress/index',$data,1,1);

    }

    function addprogress($id=''){

        $this->model->addProgress($_POST,$id);

    }

    function editprogress($id){

        $progressInfo=$this->model->progressInfo($id);
        echo json_encode($progressInfo);

    }

    function addtoarchive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->addToArchive($ids);
        }

    }

    function archive(){

        $archive=$this->model->archive();

        $data=[
            'archive'=>$archive
        ];

        $this->view('admin/progress/archive',$data,1,1);

    }

    function recovery(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->recovery($ids);
        }

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

    function sketch($idproject=''){

        if (isset($_FILES['image'])){
            $this->model->addSketch($idproject,$_FILES['image']);
        }

        $sketch=$this->model->getSketch($idproject);
        $projectInfo=$this->model->progressInfo($idproject);

        $data=[
            'sketch'=>$sketch,
            'projectInfo'=>$projectInfo
        ];

        $this->view('admin/progress/sketch',$data,1,1);

    }

    function tech($idproject){

        $tech=$this->model->getTech($idproject);
        $projectInfo=$this->model->progressInfo($idproject);

        $data=[
            'tech'=>$tech,
            'projectInfo'=>$projectInfo
        ];

        $this->view('admin/progress/tech',$data,1,1);

    }

    function deletesketch(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->deleteSkecth($ids);
        }

    }

}

?>