<?php

class model_adminform extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getForm(){

        $sql='SELECT * FROM tbl_form WHERE archive=? ORDER BY id DESC ';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function detail($formId){

        $sql='SELECT * FROM tbl_form WHERE id=? AND archive=?';
        $res=$this->doSelect($sql,[$formId,0],1);
        $socials=$res['social'];
        $socials=explode(',',$socials);
        $socials=array_filter($socials);
        $all_socials=[];
        foreach ($socials as $social){
            $social_info=$this->socialInfo($social);
            array_push($all_socials,$social_info);
        }

        $res['all_socials']=$all_socials;

        return $res;

    }

    function socialInfo($id){

        $sql='SELECT * FROM tbl_social WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addToArchive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_form SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function archive(){

        $sql='SELECT * FROM tbl_form WHERE archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_form SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_form WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

}

?>