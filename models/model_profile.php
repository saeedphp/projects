<?php

class model_profile extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getUserInfo(){

        self::sessionInit();;
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $res=$this->doSelect($sql,[$userId],1);
        return $res;

    }

    function editUserProfile($data=[]){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $name=$data['name'];
        $email=$data['email'];
        $mobile=$data['mobile'];
        $username=$data['username'];
        $error='';

        if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            $sql='UPDATE tbl_user SET name=?,email=?,mobile=?,username=? WHERE id=?';
            $params=[$name,$email,$mobile,$username,$userId];
            $this->doQuery($sql,$params);
        }else{
            $error='فرمت ایمیل نادرست است!';
        }

        header('location:'.URL.'profile/editprofile?error='.$error);

    }

    function changePass($data=[]){

        self::sessionInit();
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

        header('location:'.URL.'profile/changepass?error='.$error);

    }

}

?>