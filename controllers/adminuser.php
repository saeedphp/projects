<?php

class Adminuser extends Controller{

    public function __construct()
    {
        parent::__construct();

        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }

        $level=Model::getUserLevel();
        switch (true){
            case($level==3):
                header('location:'.URL.'admindashboard');
                break;
            case($level==4):
                header('location:'.URL.'admindashboard');
                break;
            case($level==6):
                header('location:'.URL.'admindashboard');
                break;
        }

    }

    function index(){

        $user=$this->model->getUser();
        $userLevel=$this->model->userLevel();

        $data=[
            'user'=>$user,
            'userLevel'=>$userLevel
        ];

        $this->view('admin/user/index',$data,1,1);

    }

    function adduser($id=''){

        $this->model->addUser($_POST,$id);

    }

    function edituser($id){

        $userInfo=$this->model->userInfo($id);
        echo json_encode($userInfo);

    }

    function changelevel1(){

        $ids=$_POST['id'];
        $this->model->changeLevel1($ids);
        header('location:'.URL.'adminuser');

    }

    function changelevel2(){

        $ids=$_POST['id'];
        $this->model->changeLevel2($ids);
        header('location:'.URL.'adminuser');

    }

    function changelevel3(){

        $ids=$_POST['id'];
        $this->model->changeLevel3($ids);
        header('location:'.URL.'adminuser');

    }

    function changelevel4(){

        $ids=$_POST['id'];
        $this->model->changeLevel4($ids);
        header('location:'.URL.'adminuser');

    }

    function changelevel5(){

        $ids=$_POST['id'];
        $this->model->changeLevel5($ids);
        header('location:'.URL.'adminuser');

    }

    function changelevel6(){

        $ids=$_POST['id'];
        $this->model->changeLevel6($ids);
        header('location:'.URL.'adminuser');

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>