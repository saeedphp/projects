<?php

class model_login extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function checkUser($form){

        $username=$form['username'];
        $password=$form['password'];

        $sql='SELECT * FROM tbl_user WHERE username=? AND password=?';
        $params=[$username,$password];
        $res=$this->doSelect($sql,$params);

        if ($res){
            $_SESSION['userId']=$res['id'];
            if (!empty($_POST['remember'])){
                setcookie("username",$_POST['username'],time()+(10*360*24*60*60));
                setcookie("password",$_POST['password'],time()+(10*360*24*60*60));
            }else{
                if (isset($_COOKIE['username'])){
                    setcookie('username','');
                    if (isset($_COOKIE['password'])){
                        setcookie('password','');
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

}

?>