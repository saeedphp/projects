<?php

class model_adminsupportteam extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSupportTeam(){

        $sql='SELECT * FROM tbl_supportteam ORDER BY id DESC ';
        $res=$this->doSelect($sql);
        return $res;

    }

    function supportTeamInfo($id){

        $sql='SELECT * FROM tbl_supportteam WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addSupportTeam($data=[],$id){

        $name=$data['name'];
        $position=$data['position'];
        $email=$data['email'];
        $tel=$data['tel'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_supportteam (name,position,email,tel,date,time) VALUES (?,?,?,?,?,?)';
            $params=[$name,$position,$email,$tel,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_supportteam SET name=?,position=?,email=?,tel=? WHERE id=?';
            $params=[$name,$position,$email,$tel,$id];
        }

        $this->doQuery($sql,$params);

    }

    function deleteSupport($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_supportteam WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>