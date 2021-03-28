<?php

class model_adminboardtype extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBoardType(){

        $sql='SELECT * FROM tbl_boardtype ORDER BY id DESC ';
        $res=$this->doSelect($sql);
        return $res;

    }

    function boardTypeInfo($id){

        $sql='SELECT * FROM tbl_boardtype WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addBoardType($data=[],$id){

        $title=$data['title'];
        $color=$data['color'];
        $icon=$data['icon'];
        $tabId=$data['tabId'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_boardtype (title,color,icon,tabId,date,time) VALUES (?,?,?,?,?,?)';
            $params=[$title,$color,$icon,$tabId,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_boardtype SET title=?,color=?,icon=?,tabId=? WHERE id=?';
            $params=[$title,$color,$icon,$tabId,$id];
        }

        $this->doQuery($sql,$params);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_boardtype WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>