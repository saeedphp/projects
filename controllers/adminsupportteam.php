<?php

class Adminsupportteam extends Controller{

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

        $supportTeam=$this->model->getSupportTeam();

        $data=[
            'supportTeam'=>$supportTeam
        ];

        $this->view('admin/supportteam/index',$data,1,1);

    }

    function addsupportteam($id=''){

        $this->model->addSupportTeam($_POST,$id);

    }

    function editsupportteam($id){

        $supportTeamInfo=$this->model->supportTeamInfo($id);
        echo json_encode($supportTeamInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->deleteSupport($ids);
        }

    }

}

?>