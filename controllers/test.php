<?php

class test extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('test/index');

    }

}

?>