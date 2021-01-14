<?php

class Adminsocial extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($id=''){

        $social=$this->model->getSocial();
        $socialInfo=$this->model->socialInfo($id);

        $data=[
            'social'=>$social,
            'socialInfo'=>$socialInfo
        ];

        $this->view('admin/social/index',$data,1,1);

    }

    function addsocial($id=''){

        $this->model->addSocial($_POST,$id);

    }

    function editsocial($id){

        $socialInfo=$this->model->socialInfo($id);
        echo json_encode($socialInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>