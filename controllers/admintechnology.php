<?php

class Admintechnology extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($id=''){

        $tech=$this->model->getTech();
        $techInfo=$this->model->techInfo($id);

        $data=[
            'tech'=>$tech,
            'techInfo'=>$techInfo
        ];

        $this->view('admin/technology/index',$data,1,1);

    }

    function addtech($id=''){

        $this->model->addTech($_POST, $id);

    }

    function edittech($id){

        $techInfo=$this->model->techInfo($id);
        echo json_encode($techInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>