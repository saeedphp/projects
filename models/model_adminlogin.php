<?php

class model_adminlogin extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function checkUser($form){

        $username=$form['username'];
        $password=$form['password'];

        $sql='SELECT * FROM tbl_user WHERE username=? AND password=?';
        $res=$this->doSelect($sql,[$username,$password]);

        if ($res){
            $_SESSION['userId']=$res['id'];
            if (!empty($_POST['remember'])){
                setcookie("user_login",$_POST['username'],time()+(10*360*24*60*60));
                setcookie("userpassword",$_POST['password'],time()+(10*360*24*60*60));
            }else{
                if (isset($_COOKIE['user_login'])){
                    setcookie('user_login','');
                    if (isset($_COOKIE['userpassword'])){
                        setcookie('userpassword','');
                    }
                }
                header('location:'.URL.'index');
            }
        }

        if (sizeof($res)>0 AND !empty($username) AND !empty($password)){
            self::sessionInit();
            self::sessionSet('userId',$res[0]['id']);
        }else{
            echo 'wrong user';
        }

    }

    function getUserInfo(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $res=$this->doSelect($sql,[$userId],1);
        return $res;

    }

}

?>