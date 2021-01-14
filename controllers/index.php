<?php

class Index extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $visit=Model::visit();

        $data=[
            'visit'=>$visit
        ];

        $this->view('index/index',$data);

    }

}

?>