<?php

class model_portfolio extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getPortfolio(){

        $sql='SELECT tbl_portfolio.*,tbl_portfolio_cat.title AS catTitle
              FROM tbl_portfolio
              LEFT JOIN tbl_portfolio_cat
              ON tbl_portfolio.cat=tbl_portfolio_cat.id
              WHERE tbl_portfolio.archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getPortfolioCat(){

        $sql='SELECT * FROM tbl_portfolio_cat';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>