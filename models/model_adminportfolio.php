<?php

class model_adminportfolio extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getPortfolio()
    {

        $sql = 'SELECT tbl_portfolio.*,tbl_portfolio_cat.title AS catTitle
              FROM tbl_portfolio
              LEFT JOIN tbl_portfolio_cat
              ON tbl_portfolio.cat=tbl_portfolio_cat.id
              WHERE tbl_portfolio.archive=?';
        $res = $this->doSelect($sql, [0]);
        return $res;

    }

    function getPortfolioInfo($id)
    {

        $sql = 'SELECT * FROM tbl_portfolio WHERE id=? AND archive=?';
        $res = $this->doSelect($sql, [$id, 0], 1);
        return $res;

    }

    function getPortfolioCat()
    {

        $sql = 'SELECT * FROM tbl_portfolio_cat';
        $res = $this->doSelect($sql);
        return $res;

    }

    function addCat($data, $id)
    {

        $title = $data['title'];

        if ($id == '') {
            $sql = 'INSERT INTO tbl_portfolio_cat (title) VALUES (?)';
            $params = [$title];
        } else {
            $sql = 'UPDATE tbl_portfolio_cat SET title=? WHERE id=?';
            $params = [$title, $id];
        }

        $this->doQuery($sql, $params);

    }

    function catInfo($id)
    {

        $sql = 'SELECT * FROM tbl_portfolio_cat WHERE id=?';
        $res = $this->doSelect($sql, [$id], 1);
        return $res;

    }

    function deletecat($ids)
    {

        $ids = join(',', $ids);
        $sql = 'DELETE FROM tbl_portfolio_cat WHERE id IN (' . $ids . ')';
        $this->doQuery($sql);

    }

    /*function addPortfolio($data = [], $id, $file)
    {

        $title = $data['title'];
        $cat = $data['cat'];
        $link = $data['link'];

        if (isset($data['date'])) {
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time = date('H:i:s');

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/images/projects/';
        $newName = 'portfolio';

        if ($fileType != 'image/jpg' AND $fileType != 'image/jpeg' AND $fileType != 'png') {
            $uploadOk = 0;
        }

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTmp, $target);

            if ($id == '') {
                $sql = 'INSERT INTO tbl_portfolio (title,cat,link,img,date,time) VALUES (?,?,?,?,?,?)';
                $params = [$title, $cat, $link, $target, $date_jalali, $time];

            } else {
                $sql = 'UPDATE tbl_portfolio SET title=?,cat=?,link=? WHERE id=?';
                $params = [$title, $cat, $link, $id];
            }

            $this->doQuery($sql,$params);

        }

    }*/

    function add($title, $cat, $link, $edit, $portfolioId, $files)
    {

        if (isset($_POST['date'])) {
            $date = $_POST['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time = date('H:i:s');

        $file = $files['image'];

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileTmp = $file['tmp_name'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/images/projects/';
        $newName = 'portfolio' . time();

        if ($fileType != 'image/jpg' AND $fileType != 'image/jpeg' AND $fileType != 'image/png') {
            $uploadOk = 0;
        }

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTmp, $target);
        }

        if ($edit == '') {
            $sql = 'INSERT INTO tbl_portfolio (title,cat,link,img,date,time) VALUES (?,?,?,?,?,?)';
            $params = [$title, $cat, $link, @$target, $date_jalali, $time];
        } else {
            $sql = 'UPDATE tbl_portfolio SET title=?,link=?,cat=?,img=? WHERE id=?';
            $params = [$title, $link, $cat, @$target, $portfolioId];
        }

        $this->doQuery($sql, $params);

    }

    function delete($ids)
    {

        $ids = join(',', $ids);
        $sql = 'DELETE FROM tbl_portfolio WHERE id IN (' . $ids . ')';
        $this->doQuery($sql);

    }

}

?>