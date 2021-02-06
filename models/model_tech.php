<?php

class model_tech extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getTech($projectId){

        $sql='SELECT * FROM tbl_progress WHERE id=?';
        $res=$this->doSelect($sql,[$projectId],1);
        $techs=$res['tech'];
        $techs=explode(',',$techs);
        $techs=array_filter($techs);
        $all_techs=[];
        foreach ($techs as $tech){
            $tech_info=$this->techInfo($tech);
            array_push($all_techs,$tech_info);
        }

        $res['all_techs']=$all_techs;

        return $res;

    }

    function techInfo($id){

        $sql='SELECT * FROM tbl_tech WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>