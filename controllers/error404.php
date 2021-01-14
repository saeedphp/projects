<?php

class Error404 extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('error404/index');

    }

}

?>