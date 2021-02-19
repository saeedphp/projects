<?php

class Sketch extends Controller{

    public $checkLogin='';

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin=Model::sessionGet('userId');
        if ($this->checkLogin==false){
            header('location:'.URL.'login');
        }
    }

    function index($idproject=''){

        $sketch=$this->model->getSketch($idproject);
        $progressInfo=$this->model->progressInfo($idproject);

        $data=[
            'sketch'=>$sketch,
            'progressInfo'=>$progressInfo
        ];

        $this->view('panel/sketch/index',$data);

    }

}

?>