<?php

class Adminsetting extends Controller{

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

        if (isset($_POST['font'])){
            $this->model->saveSetting($_POST);
        }

        $font=$this->model->getFont();

        $data=[
            'font'=>$font
        ];

        $this->view('admin/setting/index',$data,1,1);

    }

}

?>