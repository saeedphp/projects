<?php

class Admininsta extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $insta=$this->model->getInsta();

        $data=[
            'insta'=>$insta
        ];

        $this->view('admin/insta/index',$data,1,1);

    }

    function delete(){

        if(isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>