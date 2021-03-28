<?php

class model_adminpayfactor extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getFactor(){

        /*
         * tbl_factor == f
         * tbl_factor_status == fs
         * tbl_user == u
         * */

        $sql='SELECT f.*,fs.title AS statusTitle,u.name
              FROM tbl_factor f
              LEFT JOIN tbl_factor_status fs ON f.status=fs.id
              LEFT JOIN tbl_user u ON f.userId=u.id
              WHERE f.archive=?
              ORDER BY u.id DESC ';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function paid($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_factor SET status=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[3]);

    }

    function paying($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_factor SET status=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[2]);

    }

    function canceled($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_factor SET status=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[4]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_factor WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

    function detail($id){

        /*
         * tbl_factor == f
         * tbl_factor_status == fs
         * tbl_user == u
         * */

        $sql='SELECT f.*,fs.title AS statusTitle,u.name
              FROM tbl_factor f
              LEFT JOIN tbl_factor_status fs ON f.status=fs.id
              LEFT JOIN tbl_user u ON f.userId=u.id
              WHERE f.id=?
              ORDER BY u.id DESC ';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addFactor($data=[],$files){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $title=$data['title'];
        $tedad=$data['tedad'];
        $element=$data['element'];
        $price=$data['price'];
        $cardNum=$data['cardNum'];

        if (isset($_POST['date'])) {
            $date = $_POST['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }

        date_default_timezone_set('Asia/Tehran');
        $time = date('H:i:s');

        $file=$files['factor'];

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileTmp = $file['tmp_name'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/factor/';
        $newName = 'factor' . time();

        if ($fileSize > 10242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTmp, $target);
        }

        $sql='INSERT INTO tbl_factor (title,element,tedad,price,cardNum,factor,status,userId,date,time) VALUES (?,?,?,?,?,?,?,?,?,?)';
        $params=[$title,$element,$tedad,$price,$cardNum,@$target,1,$userId,$date_jalali,$time];
        $this->doQuery($sql,$params);

    }

    function archive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_factor SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function getArchive(){

        /*
         * tbl_factor == f
         * tbl_factor_status == fs
         * tbl_user == u
         * */

        $sql='SELECT f.*,fs.title AS statusTitle,u.name
              FROM tbl_factor f
              LEFT JOIN tbl_factor_status fs ON f.status=fs.id
              LEFT JOIN tbl_user u ON f.userId=u.id
              WHERE f.archive=?
              ORDER BY u.id DESC ';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_factor SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

}

?>