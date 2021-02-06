<?php

class model_myform extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getForm(){

        self::sessionInit();;
        $userId=self::sessionGet('userId');

        $sql='SELECT * FROM tbl_form WHERE user=?';
        $res=$this->doSelect($sql,[$userId]);
        return $res;

    }

    function socialInfo($id){

        $sql='SELECT * FROM tbl_social WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>