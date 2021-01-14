<?php

class Adminmetatag extends Controller{

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

        $meta=$this->model->getMeta();

        $data=[
            'meta'=>$meta
        ];

        $this->view('admin/metatag/index',$data,1,1);

    }

    function addmeta($id=''){

        $this->model->addMeta($_POST,$id);

    }

    function editmeta($id){

        $metaInfo=$this->model->metaInfo($id);
        echo json_encode($metaInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>