<?php

class model_admincalendar extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getCalendar(){

        $sql='SELECT * FROM tbl_calendar';
        $res=$this->doSelect($sql);
        return $res;

    }

    function addCalendar($data=[],$id){

        $title=$data['title'];
        $start_date=$data['start_date'];
        $start_month=$data['start_month'];
        $start_year=$data['start_year'];
        $end_date=$data['end_date'];
        $end_month=$data['end_month'];
        $end_year=$data['end_year'];
        $description=$data['description'];

        if ($id==''){
            $sql='INSERT INTO tbl_calendar (title,start_year,end_year,start_month,end_month,start_date,end_date,description) VALUES (?,?,?,?,?,?,?,?)';
            $params=[$title,$start_year,$end_year,$start_month,$end_month,$start_date,$end_date,$description];
        }

        $this->doQuery($sql,$params);

    }

}

?>