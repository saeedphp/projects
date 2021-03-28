<?php

class Adminboard extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }
    }

    function index(){

        $board=$this->model->getBoard();
        $boardType=$this->model->getBoardType();

        $data=[
            'board'=>$board,
            'boardType'=>$boardType
        ];

        $this->view('admin/board/index',$data,1,1);

    }

    function addboard($id=''){

        $this->model->addBoard($_POST,$id);

    }

    function editboard($id){

        $boardInfo=$this->model->boardInfo($id);
        echo json_encode($boardInfo);

    }

    function archive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->archive($ids);
        }

    }

    function getarchive(){

        $getArchive=$this->model->getArchive();
        $boardType=$this->model->getBoardType();

        $data=[
            'getArchive'=>$getArchive,
            'boardType'=>$boardType
        ];

        $this->view('admin/board/archive',$data,1,1);

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

    function detail($id=''){

        $boardDetail=$this->model->boardDetail($id);

        $data=[
            'boardDetail'=>$boardDetail
        ];

        $this->view('admin/board/detail',$data,1,1);

    }

}

?>