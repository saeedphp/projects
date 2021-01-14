<?php

class model_adminsetting extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function saveSetting($data){

        foreach ($data as $fieldName=>$value){

            $sql='UPDATE tbl_option SET value=? WHERE setting=?';
            $params=[$value,$fieldName];
            $this->doQuery($sql,$params);

        }

    }

    function getFont(){

        $sql='SELECT * FROM tbl_font';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>