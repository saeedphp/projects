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

    function getSocial(){

        $sql='SELECT * FROM tbl_social';
        $res=$this->doSelect($sql);
        return $res;

    }

    function formInfo($id){

        $sql='SELECT * FROM tbl_form WHERE id =?';
        $res=$this->doSelect($sql,[$id],1);
        $socials=$res['social'];
        $socials=explode(',',$socials);
        $socials=array_filter($socials);

        $res['socialsInfo']=[];
        foreach ($socials as $social){
            $sql='SELECT * FROM tbl_social WHERE id=?';
            $socialInfo=$this->doSelect($sql,[$social],1);
            array_push($res['socialsInfo'],$socialInfo);
        }

        return $res;

    }

}

?>