<?php

class model_adminredirect extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public static function getRedirect()
    {
        return parent::getRedirect(); // TODO: Change the autogenerated stub
    }

    function addRedirect($data,$id){

        $currentUrl=$data['currentUrl'];
        $targetUrl=$data['targetUrl'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_redirect (currentUrl,targetUrl,date,time) VALUES (?,?,?,?)';
            $params=[$currentUrl,$targetUrl,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_redirect SET currentUrl=?,targetUrl=? WHERE id=?';
            $params=[$currentUrl,$targetUrl,$id];
        }

        $this->doQuery($sql,$params);

    }

    function redirectInfo($id){

        $sql='SELECT * FROM tbl_redirect WHERE id=?';
        $res=self::doSelect($sql,[$id],1);
        return $res;

    }

    function addToArchive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_redirect SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function archive(){

        $sql='SELECT * FROM tbl_redirect WHERE archive=?';
        $res=self::doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_redirect SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_redirect WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

}

?>