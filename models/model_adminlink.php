<?php

class model_adminlink extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getLink(){

        $sql='SELECT * FROM tbl_link';
        $res=$this->doSelect($sql);
        return $res;

    }

    function linkInfo($id){

        $sql='SELECT * FROM tbl_link WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addLink($data,$id){

        $title=$data['title'];
        $link=$data['link'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_link (title,link,date,time) VALUES (?,?,?,?)';
            $params=[$title,$link,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_link SET title=?,link=? WHERE id=?';
            $params=[$title,$link,$id];
        }

        $this->doQuery($sql,$params);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_link WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>