<?php

class Admindashboard extends Controller
{


    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }
    }

    function index()
    {

        $x = $this->model->getStat();
        $y = $this->model->getWeekStat();
        $progress = $this->model->getProgress();
        $progressStat = $x[0];
        $weekStat = $y[0];
        $summary = $this->model->getProgressSummary();
        $financial = $this->model->getFinancial();
        $visit = $this->model->visit();


        $data = [
            'progressStat' => $progressStat,
            'weekStat' => $weekStat,
            'progress' => $progress,
            'summary' => $summary,
            'financial' => $financial,
            'visit' => $visit
        ];

        $this->view('admin/dashboard/index', $data, 1, 1);

    }

    function logout()
    {

        $this->model->logOut();
        header('location:' . URL);

    }

}

?>