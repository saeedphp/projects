<?php

class model_adminfinancial extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getFinancial(){

        /*
         * f = tbl_financial   cost of projects
         * pP = tbl_progress   title of project
         * pT = tbl_project    type of projects
         * s = tbl_finanical_status    status of projectsFinancial
         * */

        $sql='SELECT f.*,pP.title AS projectTitle,pT.title AS projectType,s.title AS projectStatus
              FROM tbl_financial f
              LEFT JOIN tbl_progress pP ON f.project=pP.id
              LEFT JOIN tbl_project pT ON f.type=pT.id
              LEFT JOIN tbl_financial_status s ON f.status=s.id
              WHERE f.archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function detail($id){

        /*
         * f = tbl_financial   cost of projects
         * pP = tbl_progress   title of project
         * pT = tbl_project    type of projects
         * s = tbl_finanical_status    status of projectsFinancial
         * */

        $sql='SELECT f.*,pP.title AS projectTitle,pP.deadline,pP.date AS projectDate,pT.title AS projectType,s.title AS projectStatus
              FROM tbl_financial f
              LEFT JOIN tbl_progress pP ON f.project=pP.id
              LEFT JOIN tbl_project pT ON f.type=pT.id
              LEFT JOIN tbl_financial_status s ON f.status=s.id
              WHERE f.id=? AND f.archive=?';
        $res=$this->doSelect($sql,[$id,0],1);
        return $res;

    }

    function financialInfo($id){

        $sql='SELECT * FROM tbl_financial WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function getProgress(){

        $sql='SELECT * FROM tbl_progress WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getProject(){

        $sql='SELECT * FROM tbl_project WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getFinancialStatus(){

        $sql='SELECT * FROM tbl_financial_status';
        $res=$this->doSelect($sql);
        return $res;

    }

    function addFinancial($data,$id){

        $project=$data['project'];
        $cost=$data['cost'];
        $type=$data['type'];
        $status=$data['status'];
        $description=$data['description'];

        $date = date('Y/m/d');
        $date_jalali = self::gregorianToJalali($date, '/');
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_financial (description,cost,project,type,status,date,time) VALUES (?,?,?,?,?,?,?)';
            $params=[$description,$cost,$project,$type,$status,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_financial SET description=?,cost=?,project=?,type=?,status=? WHERE id=?';
            $params=[$description,$cost,$project,$type,$status,$id];
        }

        $this->doQuery($sql,$params);

    }

    function addToArchive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_financial SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function archive(){

        /*
         * f = tbl_financial   cost of projects
         * pP = tbl_progress   title of project
         * pT = tbl_project    type of projects
         * s = tbl_finanical_status    status of projectsFinancial
         * */

        $sql='SELECT f.*,pP.title AS projectTitle,pT.title AS projectType,s.title AS projectStatus
              FROM tbl_financial f
              LEFT JOIN tbl_progress pP ON f.project=pP.id
              LEFT JOIN tbl_project pT ON f.type=pT.id
              LEFT JOIN tbl_financial_status s ON f.status=s.id
              WHERE f.archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_financial SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_financial WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

}

?>