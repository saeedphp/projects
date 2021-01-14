<?php

class model_adminsocial extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSocial(){

        $sql='SELECT * FROM tbl_social ORDER BY id DESC ';
        $res=$this->doSelect($sql);
        return $res;

    }

    function socialInfo($id){

        $sql='SELECT * FROM tbl_social WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addSocial($data,$id){

        $title=$data['title'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_social (title,date,time) VALUES (?,?,?)';
            $params=[$title,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_social SET title=? WHERE id=?';
            $params=[$title,$id];
        }

        $this->doQuery($sql,$params);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_social WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>