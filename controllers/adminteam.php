<?php

class adminteam extends Controller{

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

        $team=$this->model->getTeam();

        $data=[
            'team'=>$team
        ];

        $this->view('admin/team/index',$data,1,1);

    }

}

?>