<?php

class model_sketch extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSketch($projectId){

        $sql='SELECt * FROM tbl_sketch WHERE projectId=?';
        $res=$this->doSelect($sql,[$projectId]);
        return $res;

    }

    function progressInfo($projectId){

        $sql='SELECT * FROM tbl_progress WHERE id=?';
        $res=$this->doSelect($sql,[$projectId],1);
        return $res;

    }

}

?>