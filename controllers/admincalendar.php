<?php

class admincalendar extends Controller{

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

        $calendar=$this->model->getCalendar();

        $data=[
            'calendar'=>$calendar
        ];

        $this->view('admin/calendar/index',$data,1,1);

    }

    function addcalendar($id=''){

        $this->model->addCalendar($_POST,$id);

    }

}

?>