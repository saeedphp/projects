<?php

class model_ticket extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getTicket(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT tbl_ticket.*,tbl_ticket_status.title AS statusTitle
              FROM tbl_ticket
              LEFT JOIN tbl_ticket_status
              ON tbl_ticket.status=tbl_ticket_status.id
              WHERE tbl_ticket.userId=?
              ORDER BY tbl_ticket.id DESC ';
        $res=$this->doSelect($sql,[$userId]);
        return $res;

    }

    function addTicket($data=[],$file){

        $priority=$data['priority'];
        $title=$data['title'];
        $subject=$data['subject'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }

        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/tickets/';
        $newName = 'tickets-' . time();
        $error='';

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;

            move_uploaded_file($fileTmp, $target);

            $sql='INSERT INTO tbl_ticket (priority,title,subject,file,status,userId,date,time) VALUES (?,?,?,?,?,?,?,?)';
            $params=[$priority,$title,$subject,@$target,1,$userId,$date_jalali,$time];
            $this->doQuery($sql,$params);

            header('location:'.URL.'ticket/addticket?error='.$error);

        }

    }

    function ticketInfo($ticketId){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT tbl_ticket.*,tbl_ticket_status.title AS statusTitle
              FROM tbl_ticket
              LEFT JOIN tbl_ticket_status
              ON tbl_ticket.status=tbl_ticket_status.id
              WHERE tbl_ticket.userId=?
              AND tbl_ticket.id=?
              ORDER BY tbl_ticket.id DESC ';
        $res=$this->doSelect($sql,[$userId,$ticketId],1);
        return $res;

    }

}

?>