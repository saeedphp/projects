<?php

class model_adminteam extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getTeam(){

        $sql='SELECT * FROM tbl_team WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

}

?>