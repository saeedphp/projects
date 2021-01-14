<?php

class Adminstat extends Controller
{

    public function __construct()
    {
        parent::__construct();

        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }

        $level = Model::getUserLevel();
        switch (true) {
            case($level == 2):
                header('location:' . URL . 'admindashboard');
                break;
            case($level == 3):
                header('location:' . URL . 'admindashboard');
                break;
            case($level == 4):
                header('location:' . URL . 'admindashboard');
                break;
            case($level == 6):
                header('location:' . URL . 'admindashboard');
                break;
        }

    }

    function index()
    {

        $this->view('admin/stat/index', [], 1, 1);

    }

    function project()
    {

        $data = $_POST;
        $project = $this->model->project($data);


        $data = [
            'project' => $project
        ];

        $this->view('admin/stat/project', $data, 1, 1);

    }

    function user()
    {

        $data = $_POST;
        $user = $this->model->user($data);

        $data = [
            'user' => $user
        ];

        $this->view('admin/stat/user', $data, 1, 1);

    }

    function financial()
    {

        $data = $_POST;
        $financial = $this->model->financial($data);

        $data = [
            'financial' => $financial
        ];

        $this->view('admin/stat/financial', $data, 1, 1);

    }

}

?>