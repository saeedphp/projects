<?php

class model_adminfactor extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getFactor(){

        $sql='SELECT tbl_factor.*,tbl_user.name
              FROM tbl_factor
              LEFT JOIN tbl_user
              ON tbl_factor.userId=tbl_user.id 
              WHERE tbl_factor.archive=?
              ORDER BY tbl_factor.id DESC';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function addFactor($data=[],$id){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $title=$data['title'];
        $element=$data['element'];
        $cardNum=$data['cardNum'];
        $tedad=$data['tedad'];
        $price=$data['price'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }

        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_factor (title,element,tedad,price,cardNum,date,time,userId,status) VALUES (?,?,?,?,?,?,?,?,?)';
            $params=[$title,$element,$tedad,$price,$cardNum,$date_jalali,$time,$userId,1];
        }

        $this->doQuery($sql,$params);


    }

}

?>