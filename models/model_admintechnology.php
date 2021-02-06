<?php

class model_admintechnology extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getTech(){

        $sql='SELECT * FROM tbl_tech';
        $res=$this->doSelect($sql);
        return $res;

    }

    function techInfo($id){

        $sql='SELECT * FROM tbl_tech WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addTech($data=[],$id){

        $title=$data['title'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_tech (title,date,time) VALUES (?,?,?)';
            $params=[$title,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_tech SET title=? WHERE id=?';
            $params=[$title,$id];
        }

        $this->doQuery($sql,$params);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_tech WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>