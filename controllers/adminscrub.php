<?php

class adminscrub extends Controller{

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

        $this->view('admin/scrub/index',[],1,1);

    }

}

?>