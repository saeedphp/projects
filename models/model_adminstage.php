<?php

class model_adminstage extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getStatus(){

        $sql='SELECT * FROM tbl_status WHERE remove=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function statusInfo($id){

        $sql='SELECT * FROM tbl_status WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addStatus($data=[],$id){

        $title=$data['title'];
        $progress=$data['progress'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_status (title,progress,date,time) VALUES (?,?,?,?)';
            $params=[$title,$progress,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_status SET title=?,progress=? WHERE id=?';
            $params=[$title,$progress,$id];
        }

        $this->doQuery($sql,$params);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_status WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>