<?php

class Adminlink extends Controller{

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

        $link=$this->model->getLink();

        $data=[
            'link'=>$link
        ];

        $this->view('admin/link/index',$data,1,1);

    }
    function addlink($id=''){

        $this->model->addLink($_POST,$id);

    }

    function editlink($id){

        $linkInfo=$this->model->linkInfo($id);
        echo json_encode($linkInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>