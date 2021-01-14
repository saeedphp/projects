<?php

class Adminstage extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($id=''){

        $status=$this->model->getStatus();
        $statusInfo=$this->model->statusInfo($id);

        $data=[
            'status'=>$status,
            'statusInfo'=>$statusInfo
        ];

        $this->view('admin/stage/index',$data,1,1);

    }

    function addstatus($id=''){

        $this->model->addStatus($_POST, $id);

    }

    function editstage($id){

        $statusInfo=$this->model->statusInfo($id);
        echo json_encode($statusInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>