<?php

class model_status extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProjectInfo(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        /*
         * p  == tbl_progress
         * pt == tbl_project
         * ps == tbl_status
         * */

        $sql='SELECT p.*,pT.title AS projectType,ps.title AS statusTitle,ps.progress
              FROM tbl_progress p
              LEFT JOIN tbl_project pt ON p.type=pt.id
              LEFT JOIN tbl_status ps ON p.status=ps.id
              WHERE p.userId=?';
        $res=$this->doSelect($sql,[$userId]);
        return $res;

    }

}

?>