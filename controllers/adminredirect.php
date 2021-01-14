<?php

class Adminredirect extends Controller{

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

    function index($id=''){

        $redirect=$this->model->getRedirect();
        $redirectInfo=$this->model->redirectInfo($id);

        $data=[
            'redirect'=>$redirect,
            'redirectInfo'=>$redirectInfo
        ];

        $this->view('admin/redirect/index',$data,1,1);

    }

    function addredirect($id=''){

        $this->model->addRedirect($_POST,$id);

    }

    function editredirect($id){

        $redirectInfo=$this->model->redirectInfo($id);
        echo json_encode($redirectInfo);

    }

    function addtoarchive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->addToArchive($ids);
        }

    }

    function archive($id=''){

        $redirect=$this->model->archive();

        $data=[
            'redirect'=>$redirect,
        ];

        $this->view('admin/redirect/archive',$data,1,1);

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