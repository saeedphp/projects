<?php

class model_adminuser extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getUser(){

        $sql='SELECT tbl_user.*,tbl_user_level.title
              FROM tbl_user
              LEFT JOIN tbl_user_level
              ON tbl_user.level=tbl_user_level.id
              ORDER BY tbl_user.id DESC ';
        $res=$this->doSelect($sql);
        return $res;

    }

    function userLevel(){

        $sql='SELECT * FROM tbl_user_level';
        $res=$this->doSelect($sql);
        return $res;

    }

    function userInfo($id){

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addUser($data=[],$id){

        $username=$data['username'];
        $password=$data['password'];
        $name=$data['name'];
        $email=$data['email'];
        $mobile=$data['mobile'];
        $level=$data['level'];
        $date = date('Y/m/d');
        $date_jalali = self::gregorianToJalali($date, '/');
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_user (username,password,name,email,mobile,level,date,time) VALUES (?,?,?,?,?,?,?,?)';
            $params=[$username,$password,$name,$email,$mobile,$level,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_user SET username=?,password=?,name=?,email=?,mobile=?,level=? WHERE id=?';
            $params=[$username,$password,$name,$email,$mobile,$level,$id];
        }

        $this->doQuery($sql,$params);

    }

    //change to admin
    function changeLevel1($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    //change to supervisor
    function changeLevel2($ids){

        $ids=join(',',$ids);

        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[2]);

    }

    //change to programmer
    function changeLevel3($ids){

        $ids=join(',',$ids);

        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[3]);

    }

    //change to graphic designer
    function changeLevel4($ids){

        $ids=join(',',$ids);

        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[4]);

    }

    //change to viewer
    function changeLevel5($ids){

        $ids=join(',',$ids);

        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[5]);

    }

    //change to accountant
    function changeLevel6($ids){

        $ids=join(',',$ids);

        $sql='UPDATE tbl_user SET level=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[6]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_user WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>