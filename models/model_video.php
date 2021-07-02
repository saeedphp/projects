<?php

class model_video extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getVideo($projectId){

        $sql='SELECT * FROM tbl_video WHERE projectId=?';
        $res=$this->doSelect($sql,[$projectId]);
        return $res;

    }

    function getProjectInfo(){

        self::sessionInit();
        $userId=self::sessionGet('userId');

        /*
         * p  == tbl_progress
         * pt == tbl_project
         * ps == tbl_status
         * */

        $sql='SELECT p.*,pt.title AS projectType,ps.title AS statusTitle,ps.progress
              FROM tbl_progress p
              LEFT JOIN tbl_project pt ON p.type=pt.id
              LEFT JOIN tbl_status ps ON p.status=ps.id
              WHERE p.userId=?';
        $res=$this->doSelect($sql,[$userId]);
        return $res;

    }

}

?>