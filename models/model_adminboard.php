<?php

class model_adminboard extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBoard(){

        $sql='SELECT tbl_board.*,tbl_boardtype.title AS boardTypeTitle,tbl_boardtype.color,tbl_boardtype.icon,tbl_boardtype.tabId
              FROM tbl_board
              LEFT JOIN tbl_boardtype
              ON tbl_board.type=tbl_boardtype.id
              WHERE tbl_board.archive=? ORDER BY tbl_board.id DESC ';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function boardInfo($id){

        $sql='SELECT * FROM tbl_board WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function getBoardType(){

        $sql='SELECT * FROM tbl_boardtype';
        $res=$this->doSelect($sql);
        return $res;

    }

    function addBoard($data=[],$id){

        $title=$data['title'];
        $description=$data['description'];
        $type=$data['type'];

        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }

        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_board (title,description,type,date,time) VALUES (?,?,?,?,?)';
            $params=[$title,$description,$type,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_board SET title=?,description=?,type=? WHERE id=?';
            $params=[$title,$description,$type,$id];
        }

        $this->doQuery($sql,$params);

    }

    function archive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_board SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function getArchive(){

        $sql='SELECT tbl_board.*,tbl_boardtype.title AS boardTypeTitle,tbl_boardtype.color,tbl_boardtype.icon
              FROM tbl_board
              LEFT JOIN tbl_boardtype
              ON tbl_board.type=tbl_boardtype.id
              WHERE tbl_board.archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_board SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_board WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

    function boardDetail($id){

        $sql='SELECT tbl_board.*,tbl_boardtype.title AS boardTypeTitle,tbl_boardtype.color,tbl_boardtype.icon,tbl_boardtype.tabId
              FROM tbl_board
              LEFT JOIN tbl_boardtype
              ON tbl_board.type=tbl_boardtype.id
              WHERE tbl_board.archive=? 
              AND tbl_board.id=? 
              ORDER BY tbl_board.id DESC ';
        $res=$this->doSelect($sql,[0,$id],1);
        return $res;

    }

}

?>