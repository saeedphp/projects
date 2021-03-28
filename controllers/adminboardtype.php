<?php

class Adminboardtype extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($id=''){

        $boardType=$this->model->getBoardType();
        $boardInfo=$this->model->boardTypeInfo($id);

        $data=[
            'boardType'=>$boardType,
            'boardInfo'=>$boardInfo
        ];

        $this->view('admin/board/boardtype',$data,1,1);

    }

    function addboardtype($id=''){

        $this->model->addBoardType($_POST,$id);

    }

    function editboardtype($id){

        $boardInfo=$this->model->boardTypeInfo($id);
        echo json_encode($boardInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>