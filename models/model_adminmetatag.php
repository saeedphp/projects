<?php

class model_adminmetatag extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getMeta(){

        $sql='SELECT * FROM tbl_metatag';
        $res=$this->doSelect($sql);
        return $res;

    }

    function addMeta($data,$id){

        $url=$data['url'];
        $title=$data['title'];
        $keyword=$data['keyword'];
        $description=$data['description'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_metatag (url,title,keyword,description,date,time) VALUES (?,?,?,?,?,?)';
            $params=[$url,$title,$keyword,$description,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_metatag SET url=?,title=?,keyword=?,description=?,date=?,time=? WHERE id=?';
            $params=[$url,$title,$keyword,$description,$date_jalali,$time,$id];
        }

        $this->doQuery($sql,$params);

    }

    function metaInfo($id){

        $sql='SELECT * FROM tbl_metatag WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_metatag WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>