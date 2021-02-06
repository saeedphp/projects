<?php

class model_adminprogress extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProgress(){

        /*
         * p  == tbl_progress
         * pt == tbl_project
         * ps == tbl_status
         * */

        $sql='SELECT p.*,pT.title AS projectType,ps.title AS statusTitle
              FROM tbl_progress p
              LEFT JOIN tbl_project pt ON p.type=pt.id
              LEFT JOIN tbl_status ps ON p.status=ps.id
              WHERE p.archive=? ORDER BY id DESC ';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getStatus(){

        $sql='SELECT * FROM tbl_status';
        $res=$this->doSelect($sql);
        return $res;

    }

    function progressInfo($id){

        $sql='SELECT * FROM tbl_progress WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function getProject(){

        $sql='SELECT * FROM tbl_project WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function addProgress($data=[],$id){

        $title=$data['title'];
        $type=$data['type'];
        $status=$data['status'];
        $deadline=$data['deadline'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        $tech = '';
        if (isset($data['tech'])) {
            $tech = $data['tech'];
            $tech = join(',', $tech);
        }

        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_progress (title,type,status,tech,deadline,date,time) VALUE (?,?,?,?,?,?,?)';
            $params=[$title,$type,$status,$tech,$deadline,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_progress SET title=?,type=?,status=?,tech=?,deadline=?,date=?,time=? WHERE id=?';
            $params=[$title,$type,$status,$tech,$deadline,$date_jalali,$time,$id];
        }

        $this->doQuery($sql,$params);

    }

    function addToArchive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_progress SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function archive(){

        /*
         * p  == tbl_progress
         * pt == tbl_project
         * ps == tbl_status
         * */

        $sql='SELECT p.*,pT.title AS projectType,ps.title AS statusTitle
              FROM tbl_progress p
              LEFT JOIN tbl_project pt ON p.type=pt.id
              LEFT JOIN tbl_status ps ON p.status=ps.id
              WHERE p.archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_progress SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_progress WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

    function getSketch($projectId){

        $sql='SELECT * FROM tbl_sketch WHERE projectId=?';
        $res=$this->doSelect($sql,[$projectId]);
        return $res;

    }

    function addSketch($projectId, $file)
    {

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/images/sketch/';
        $newName = 'sketch-' . time();

        if ($fileType != 'image/jpg' AND $fileType != 'image/jpeg' AND $fileType != 'png') {
            $uploadOk = 0;
        }

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;

            move_uploaded_file($fileTmp, $target);

            $sql = 'INSERT INTO tbl_sketch (image,projectId) VALUES (?,?)';
            $params = [$target,$projectId];
            $this->doQuery($sql, $params);

        }

    }

    function deleteSkecth($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_sketch WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

    function getTech(){

        $sql='SELECT * FROM tbl_tech';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>