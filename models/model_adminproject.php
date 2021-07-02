<?php

class model_adminproject extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProject(){

        $sql='SELECT * FROM tbl_project WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function projectInfo($id){

        $sql='SELECT * FROM tbl_project WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addProject($data=[],$id){

        $title=$data['title'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_project (title,date,time) VALUES (?,?,?)';
            $params=[$title,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_project SET title=?,date=?,time=? WHERE id=?';
            $params=[$title,$date_jalali,$time,$id];
        }

        $this->doQuery($sql,$params);

    }

    function archive(){

        $sql='SELECT * FROM tbl_project WHERE archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function addToArchive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_project SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_project SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_project WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>