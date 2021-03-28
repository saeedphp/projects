<?php

class Adminfactor extends Controller{

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

        $this->view('admin/factor/index',$data,1,1);

    }

    function addfactor($id=''){

        $this->model->addFactor($_POST,$id);

    }

}

?>