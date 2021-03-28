<?php

class Adminpayfactor extends Controller{

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

        $factor=$this->model->getFactor();

        $data=[
            'factor'=>$factor
        ];

        $this->view('admin/payfactor/index',$data,1,1);

    }

    function paid(){

        $ids=$_POST['id'];
        $this->model->paid($ids);
        header('location:'.URL.'adminpayfactor');

    }

    function paying(){

        $ids=$_POST['id'];
        $this->model->paying($ids);
        header('location:'.URL.'adminpayfactor');

    }

    function canceled(){

        $ids=$_POST['id'];
        $this->model->canceled($ids);
        header('location:'.URL.'adminpayfactor');

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
            header('location:'.URL.'adminpayfactor');
        }

    }

    function detail($id){

        $detail=$this->model->detail($id);

        $data=[
            'detail'=>$detail
        ];

        $this->view('admin/payfactor/detail',$data,1,1);

    }

    function addfactor(){

        if (isset($_POST['title'])){
            $this->model->addFactor($_POST,$_FILES);
        }

        $this->view('admin/payfactor/addfactor',[],1,1);

    }

    function archive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->archive($ids);
        }

    }

    function getarchive(){

        $archive=$this->model->getArchive();

        $data=[
            'getArchive'=>$archive
        ];

        $this->view('admin/payfactor/archive',$data,1,1);

    }

    function recovery(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->recovery($ids);
        }

    }

}

?>