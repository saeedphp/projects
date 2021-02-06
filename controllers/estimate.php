<?php

class Estimate extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('estimate/index');

    }

    function price(){

        $this->view('estimate/price');

    }

}

?>