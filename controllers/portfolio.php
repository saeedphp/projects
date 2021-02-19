<?php

class Portfolio extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $visit=Model::visit();
        $portfolio=$this->model->getPortfolio();
        $portfolioCat=$this->model->getPortfolioCat();

        $data=[
            'portfolio'=>$portfolio,
            'portfolioCat'=>$portfolioCat
        ];

        $this->view('portfolio/index',$data);

    }

}

?>