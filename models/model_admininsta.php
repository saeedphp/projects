<?php

class model_admininsta extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getInsta(){

        $sql='SELECT * FROM tbl_insta ORDER BY id DESC ';
        $res=$this->doSelect($sql);
        return $res;

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_insta WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>