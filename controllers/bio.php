<?php

class Bio extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $visit=Model::visit();

        $this->view('bio/index',[]);

    }

}

?>