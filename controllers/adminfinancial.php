<?php

class Adminfinancial extends Controller{

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
            case($level==2):
                header('location:'.URL.'admindashboard');
                break;
            case($level==3):
                header('location:'.URL.'admindashboard');
                break;
            case($level==4):
                header('location:'.URL.'admindashboard');
                break;
        }

    }

    function index(){

        $financial=$this->model->getFinancial();

        $data=[
            'financial'=>$financial
        ];

        $this->view('admin/financial/index',$data,1,1);

    }

    function detail($id){

        $detail=$this->model->detail($id);

        $data=[
            'detail'=>$detail
        ];

        $this->view('admin/financial/detail',$data,1,1);

    }

    function addfinancial($id=''){

        if (isset($_POST['cost'])){
            $this->model->addFinancial($_POST,$id);
        }

        $financialInfo=$this->model->detail($id);
        $progress=$this->model->getProgress();
        $project=$this->model->getProject();
        $financialStatus=$this->model->getFinancialStatus();

        $data=[
            'financialInfo'=>$financialInfo,
            'progress'=>$progress,
            'project'=>$project,
            'financialStatus'=>$financialStatus,
            'parentId'=>$id
        ];

        $this->view('admin/financial/addfinancial',$data,1,1);

    }

    function editfinancial($id){

        $financialInfo=$this->model->detail($id);
        echo json_encode($financialInfo);

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

        $this->view('admin/financial/archive',$data,1,1);

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