<?php

class Adminform extends Controller{

    public function __construct()
    {
        parent::__construct();

        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }

        $level=Model::getUserLevel();
        switch (true){
            case($level==4):
                header('location:'.URL.'admindashboard');
                break;
            case($level==6):
                header('location:'.URL.'admindashboard');
                break;
        }

    }

    function index(){

        $form=$this->model->getForm();

        $data=[
            'form'=>$form
        ];

        $this->view('admin/form/index',$data,1,1);

    }

    function detail($formid){

        $detail=$this->model->detail($formid);

        $data=[
            'detail'=>$detail
        ];

        $this->view('admin/form/detail',$data,1,1);

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

        $this->view('admin/form/archive',$data,1,1);

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