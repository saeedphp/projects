<?php

class Ticket extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $ticket=$this->model->getTicket();

        $data=[
            'ticket'=>$ticket
        ];

        $this->view('panel/ticket/index',$data);

    }

    function addticket(){

        if (isset($_POST['title'])){
            $this->model->addTicket($_POST,$_FILES['file']);
        }

        $this->view('panel/ticket/addticket');

    }

    function detail($ticketid){

        $ticketInfo=$this->model->ticketInfo($ticketid);

        $data=[
            'ticketInfo'=>$ticketInfo
        ];

        $this->view('panel/ticket/detail',$data);

    }

}

?>