<?php

class Adminproject extends Controller{

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

        $project=$this->model->getProject();
        $projectInfo=$this->model->projectInfo($id);

        $data=[
            'project'=>$project,
            'projectInfo'=>$projectInfo
        ];

        $this->view('admin/project/index',$data,1,1);

    }

    function addproject($id=''){

        $this->model->addProject($_POST,$id);

    }

    function editproject($id){

        $projectInfo=$this->model->projectInfo($id);
        echo json_encode($projectInfo);

    }

    function archive(){

        $archive=$this->model->archive();

        $data=[
            'archive'=>$archive
        ];

        $this->view('admin/project/archive',$data,1,1);

    }

    function addtoarchive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->addToArchive($ids);
        }

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

}

?>