<?php

class adminportfolio extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check = Model::sessionGet('userId');
        if ($check == false) {
            header('location:' . URL . 'adminlogin');
        }
    }

    function index(){

        $portfolio=$this->model->getPortfolio();

        $data=[
            'portfolio'=>$portfolio
        ];

        $this->view('admin/portfolio/index',$data,1,1);

    }

    function cat(){

        $portfolioCat=$this->model->getPortfolioCat();

        $data=[
            'portfolioCat'=>$portfolioCat
        ];

        $this->view('admin/portfolio/cat',$data,1,1);

    }

    function addcat($id=''){

        $this->model->addCat($_POST,$id);

    }

    function editcat($id){

        $catInfo=$this->model->catInfo($id);
        echo json_encode($catInfo);

    }

    function deletecat(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->deletecat($ids);
        }

    }

    function addportfolio($portfolioId=0,$edit=''){

        if (isset($_POST['title'])){
            $title=$_POST['title'];
            $cat=$_POST['cat'];
            $link=$_POST['link'];
            $this->model->add($title,$cat,$link,$edit,$portfolioId,$_FILES);
        }

        $portfolio=$this->model->getPortfolio();
        $catPortfolio=$this->model->getPortfolioCat();
        $portfolioInfo=$this->model->getPortfolioInfo($portfolioId);

        $data=[
            'portfolio'=>$portfolio,
            'catPortfolio'=>$catPortfolio,
            'portfolioInfo'=>$portfolioInfo,
            'edit'=>$edit
        ];

        $this->view('admin/portfolio/addportfolio',$data,1,1);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>