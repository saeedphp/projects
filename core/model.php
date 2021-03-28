<?php

class Model{

    public static $conn='';


    public function __construct()
    {
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='faramouj-projects';
        $attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
        self::$conn=new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password,$attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if (function_exists('jdate')==false){
            require ('assets/jdf/jdf.php');
        }

    }

    function doSelect($sql,$values=[],$fetch='',$fetchStyle=PDO::FETCH_ASSOC){

        $stmt=self::$conn->prepare($sql);

        foreach ($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();
        if ($fetch==''){
            $res=$stmt->fetchAll($fetchStyle);
        }else{
            $res=$stmt->fetch($fetchStyle);
        }

        return $res;

    }

    function doQuery($sql,$values=[]){

        $stmt=self::$conn->prepare($sql);

        foreach ($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();

    }

    public static function jalaliDate($format='Y/n/j'){

        $date=jdate($format);
        return $date;

    }

    public static function jalaliToGregorian($jalali,$format='/'){

        $jalali=explode('/',$jalali);
        $year=$jalali[0];
        $month=$jalali[1];
        $day=$jalali[2];
        $date=jalali_to_gregorian($year,$month,$day);
        $date=implode($format,$date);
        $date=new DateTime($date);
        $date=$date->format('Y/m/d');

        return $date;

    }

    public static function gregorianToJalali($gregorian,$format='/'){

        $gregorian=explode('/',$gregorian);
        $year=$gregorian[0];
        $month=$gregorian[1];
        $day=$gregorian[2];
        $date=gregorian_to_jalali($year,$month,$day);
        $date=implode($format,$date);
        $date=new DateTime($date);
        $date=$date->format('Y/m/d');

        return $date;

    }

    public static function getOption(){

        $sql='SELECT * FROM tbl_option';
        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
        $options=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $options_new=[];
        foreach ($options as $options){
            $setting=$options['setting'];
            $value=$options['value'];
            $options_new[$setting]=$value;
        }

        return $options_new;

    }

    public static function sessionInit(){

        @session_start();

    }

    public static function sessionSet($name,$vale){

        $_SESSION[$name]=$vale;

    }

    public static function sessionGet($name){

        if (isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return false;
        }

    }

    public static function getMetaTga(){

        $url=$actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $sql='SELECT * FROM tbl_metatag WHERE url=?';
        $res=self::doSelect($sql,[$url],1);
        return $res;

    }

    public static function link(){

        $sql='SELECT * FROM tbl_link';
        $res=self::doSelect($sql);
        return $res;

    }

    public static function logOut(){

        self::sessionInit();
        unset($_SESSION['userId']);

    }

    public static function getUserLevel(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $userInfo=self::doSelect($sql,[$userId],1);
        return $userInfo['level'];

    }

    public static function getUserName(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $userInfo=self::doSelect($sql,[$userId],1);
        return $userInfo['name'];

    }

    public static function getUserDate(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $userInfo=self::doSelect($sql,[$userId],1);
        return $userInfo['date'];

    }

    public static function getUserMobile(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_user WHERE id=?';
        $userInfo=self::doSelect($sql,[$userId],1);
        return $userInfo['mobile'];

    }

    public static function visit(){

        $arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $user_browser = '';
        foreach ($arr_browsers as $browser) {
            if (strpos($agent, $browser) !== false) {
                $user_browser = $browser;
                break;
            }
        }

        switch ($user_browser) {
            case 'MSIE':
                $user_browser = 'Internet Explorer';
                break;

            case 'Trident':
                $user_browser = 'Internet Explorer';
                break;

            case 'Edg':
                $user_browser = 'Microsoft Edge';
                break;
        }

        $date=self::jalaliDate('Y/n/j');
        self::sessionInit();
        $coolie=self::sessionGet('userId');
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        $sql='SELECT * FROM tbl_visit WHERE cookie=?';
        $res=self::doSelect($sql,[$coolie]);

        if (!isset($res[0]['id'])){
            $sql='INSERT INTO tbl_visit (cookie,date,browser,time) VALUES (?,?,?,?)';
            $params=[$coolie,$date,$user_browser,$time];
            self::doQuery($sql,$params);
        }

    }

    public static function getRedirect(){

        $sql='SELECT * FROM tbl_redirect WHERE archive=?';
        $res=self::doSelect($sql,[0]);
        return $res;

    }

}