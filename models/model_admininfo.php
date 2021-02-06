<?php

class model_admininfo extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProjectINfo(){

        $sql='SELECT * FROM tbl_progress';
        $res=$this->doSelect($sql);
        return $res;

    }

    function projectInfo(){

        /*
         * p  == tbl_progress
         * pt == tbl_project
         * ps == tbl_status
         * u == tbl_user
         * */

        self::sessionInit();
        $userId=self::sessionGet('userId');

        $sql='SELECT p.*,pt.title AS projectType,ps.title AS statusTitle,u.title AS userTitle
              FROM tbl_progress p
              LEFT JOIN tbl_project pt ON p.type=pt.id
              LEFT JOIN tbl_status ps ON p.status=ps.id
              LEFT JOIN tbl_user_level u ON p.userId=u.id
              AND u.id=?
              WHERE p.archive=? ORDER BY id DESC ';
        $res=$this->doSelect($sql,[$userId,0],1);
        return $res;

    }

}

?>