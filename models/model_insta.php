<?php

class model_insta extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function addInsta($data=[]){

        $name=$data['name'];
        $mobile=$data['mobile'];

        if (isset($data['date'])) {
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time = date('H:i:s');

        $error='';

        $sql='SELECT * FROM tbl_insta WHERE name=? AND mobile=?';
        $params=[$name,$mobile];
        $res=$this->doSelect($sql,$params);

        if (!isset($res[0])){
            if ($name!=''){
                if ($mobile!=''){
                    $sql='INSERT INTO tbl_insta (name,mobile,date,time) VALUES (?,?,?,?)';
                    $params=[$name,$mobile,$date_jalali,$time];
                    $this->doQuery($sql,$params);
                }else{
                    $error = 'لطفا شماره همراه خود را وارد کنید!';
                }
            }else{
                $error = 'لطفا نام خود را وارد کنید!';
            }
        }else{
            $error = 'شما قبلا ثبت نام کرده اید!';
        }

        header('location:' . URL . 'insta?message=' . $error);

    }

}

?>