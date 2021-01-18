<?php

class model_register extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function addUser($data){

        $name=$data['name'];
        $email=$data['email'];
        $username=$data['username'];
        $password=$data['password'];
        $mobile=$data['mobile'];
        $error='';

        if (isset($data['date'])){
            $date=$data['date'];
            $date=date('Y/m/d');
            $date_jalali=self::gregorianToJalali($date,'/');
        }

        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        $sql='SELECT * FROM tbl_user WHERE username=? AND password=?';
        $params=[$username,$password];
        $res=$this->doSelect($sql,$params);

        if (!isset($res[0])){
            $sql='INSERT INTO tbl_user (name,email,username,password,mobile,level,date,time) VALUES (?,?,?,?,?,?,?,?)';
            $params=[$name,$email,$username,$password,$mobile,7,$date_jalali,$time];
            $this->doQuery($sql,$params);
        }else{
            $error='شما قبلا ثبت نام کرده اید!';
        }

        header('location:'.URL.'register?error='.$error);

    }

}

?>