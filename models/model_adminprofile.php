<?php

class model_adminprofile extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getUserInfo(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT tbl_user.*,tbl_user_level.title
              FROM tbl_user
              LEFT JOIN tbl_user_level
              ON tbl_user.level=tbl_user_level.id
              WHERE tbl_user.id=?';
        $res=$this->doSelect($sql,[$userId],1);
        return $res;

    }

    function editUserProfile($data=[]){

        self::sessionInit();;
        $userId=self::sessionGet('userId');

        $name=$data['name'];
        $email=$data['email'];
        $username=$data['username'];
        $mobile=$data['mobile'];

        $sql='UPDATE tbl_user SET name=?,email=?,username=?,mobile=? WHERE id=?';
        $params=[$name,$email,$username,$mobile,$userId];
        $this->doQuery($sql,$params);

    }

    function changePass($data=[]){

        self::sessionInit();;
        $userId=self::sessionGet('userId');

        $password_old=$data['password_old'];
        $password_new=$data['password_new'];
        $password_confirm=$data['password_confirm'];
        $error='';

        $userInfo=$this->getUserInfo();
        $password=$userInfo['password'];

        if ($password==$password_old){

            if ($password_new==$password_confirm){
                $sql='UPDATE tbl_user SET password=? WHERE id=?';
                $this->doQuery($sql,[$password_new,$userId]);
            }else{
                $error='تاییدیه رمز عبور صحیح نیست!';
            }

        }else{
            $error='رمز عبور فعلی نادرست است!';
        }

    }

}

?>