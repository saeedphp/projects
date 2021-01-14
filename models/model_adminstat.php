<?php

class model_adminstat extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function compareDate($date1,$date2){

        $date1=new DateTime($date1);
        $date2=new DateTime($date2);

        $date1=$date1->format('Y/m/d');
        $date2=$date2->format('Y/m/d');

        if ($date1 > $date2){
            return 1;
        }

        if ($date1 == $date1){
            return 2;
        }

        if ($date1 < $date2){
            return 3;
        }

    }

    function project($data=[]){

        $startDate=$data['date1'];
        $endDate=$data['date2'];

        $startDate=new DateTime($startDate);
        $endDate=new DateTime($endDate);

        $startDate=$startDate->format('Y/m/d');
        $endDate=$endDate->format('Y/m/d');

        $sql='SELECT * FROM tbl_progress WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        $res_total=[];
        $wpProject=0;
        $nopProject=0;
        $dotnetProject=0;
        $needs=0;
        $theme=0;
        $uiux=0;
        $dynamic=0;
        $check=0;
        $finaltest=0;
        $completed=0;

        foreach ($res as $row){
            $date=$row['date'];
            $date=new DateTime($date);
            $date=$date->format('Y/m/d');

            if ($date >= $startDate AND $date <= $endDate){
                array_push($res_total,$row);
                if ($row['type']==1){
                    $wpProject=$wpProject+1;
                }
                if ($row['type']==2){
                    $dotnetProject=$dotnetProject+1;
                }
                if ($row['type']==3){
                    $nopProject=$nopProject+1;
                }
                if ($row['status']==1){
                    $needs=$needs+1;
                }
                if ($row['status']==2){
                    $theme=$theme+1;
                }
                if ($row['status']==3){
                    $uiux=$uiux+1;
                }
                if ($row['status']==4){
                    $dynamic=$dynamic+1;
                }
                if ($row['status']==5){
                    $check=$check+1;
                }
                if ($row['status']==6){
                    $finaltest=$finaltest+1;
                }
                if ($row['status']==7){
                    $completed=$completed+1;
                }
            }

        }

        return [
            'result_total'=>$res_total,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'wpProject'=>$wpProject,
            'nopProject'=>$nopProject,
            'dotnetProject'=>$dotnetProject,
            'needs'=>$needs,
            'theme'=>$theme,
            'uiux'=>$uiux,
            'dynamic'=>$dynamic,
            'check'=>$check,
            'finaltest'=>$finaltest,
            'completed'=>$completed,
        ];

    }

    function user($data=[]){

        $startDate=$data['date1'];
        $endDate=$data['date2'];

        $startDate=new DateTime($startDate);
        $endDate=new DateTime($endDate);

        $startDate=$startDate->format('Y/m/d');
        $endDate=$endDate->format('Y/m/d');

        $sql='SELECT tbl_user.*,tbl_user_level.title
              FROM tbl_user
              LEFT JOIN tbl_user_level
              ON tbl_user.level=tbl_user_level.id';
        $res=$this->doSelect($sql);
        $res_total=[];
        $bossNum=0;
        $projectManager=0;
        $developer=0;
        $graphicDesignerNum=0;
        $viewer=0;
        $accountant=0;

        foreach ($res as $row){
            $date=$row['date'];
            $date=new DateTime($date);
            $date=$date->format('Y/m/d');

            if ($date >= $startDate AND $date <= $endDate){
                array_push($res_total,$row);
                if ($row['level']==1){
                    $bossNum=$bossNum+1;
                }
                if ($row['level']==2){
                    $projectManager=$projectManager+1;
                }
                if ($row['level']==3){
                    $developer=$developer+1;
                }
                if ($row['level']==4){
                    $graphicDesignerNum=$graphicDesignerNum+1;
                }
                if ($row['level']==5){
                    $viewer=$viewer+1;
                }
                if ($row['level']==6){
                    $accountant=$accountant+1;
                }
            }

        }

        return [
            'result_total'=>$res_total,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'bossNum'=>$bossNum,
            'projectManager'=>$projectManager,
            'developer'=>$developer,
            'graphicDesignerNum'=>$graphicDesignerNum,
            'viewer'=>$viewer,
            'accountant'=>$accountant
        ];

    }

    function financial($data=[]){

        $startDate=$data['date1'];
        $endDate=$data['date2'];

        $startDate=new DateTime($startDate);
        $endDate=new DateTime($endDate);

        $startDate=$startDate->format('Y/m/d');
        $endDate=$endDate->format('Y/m/d');

        /*
         * f = tbl_financial   cost of projects
         * pP = tbl_progress   title of project
         * pT = tbl_project    type of projects
         * s = tbl_finanical_status    status of projectsFinancial
         * */

        $sql='SELECT f.*,pP.title AS projectTitle,pT.title AS projectType,s.title AS projectStatus
              FROM tbl_financial f
              LEFT JOIN tbl_progress pP ON f.project=pP.id
              LEFT JOIN tbl_project pT ON f.type=pT.id
              LEFT JOIN tbl_financial_status s ON f.status=s.id
              WHERE f.archive=?';
        $res=$this->doSelect($sql,[0]);
        $res_total=[];
        $paidProject=0;
        $waitProject=0;
        $postponesProject=0;

        $paidWpProject=0;
        $waitWpProject=0;
        $postponedWpProject=0;

        $paidDotNetProject=0;
        $waitDotNetProject=0;
        $postponedDotNetProject=0;

        $paidNopProject=0;
        $waitNopProject=0;
        $postponedNopProject=0;

        $amountTotal=0;
        $amountWpTotal=0;
        $amountDotNetTotal=0;
        $amountNopCommerceTotal=0;

        foreach ($res as $row){
            $date=$row['date'];
            $date=new DateTime($date);
            $date=$date->format('Y/m/d');

            if ($date >= $startDate AND $date <= $endDate){
                array_push($res_total,$row);
                if ($row['status']==1){
                    $paidProject=$paidProject+1;
                }
                if ($row['status']==2){
                    $waitProject=$waitProject+1;
                }
                if ($row['status']==3){
                    $postponesProject=$postponesProject+1;
                }

                if ($row['status']==1 && $row['type']==1){
                    $paidWpProject=$paidWpProject+1;
                }
                if ($row['status']==2 && $row['type']==1){
                    $waitWpProject=$waitWpProject+1;
                }
                if ($row['status']==3 && $row['type']==1){
                    $postponedWpProject=$postponedWpProject+1;
                }

                if ($row['status']==1 && $row['type']==1){
                    $paidDotNetProject=$paidDotNetProject+1;
                }
                if ($row['status']==2 && $row['type']==1){
                    $waitDotNetProject=$waitDotNetProject+1;
                }
                if ($row['status']==3 && $row['type']==1){
                    $postponedDotNetProject=$postponedDotNetProject+1;
                }

                if ($row['status']==1 && $row['type']==1){
                    $paidNopProject=$paidNopProject+1;
                }
                if ($row['status']==2 && $row['type']==1){
                    $waitNopProject=$waitNopProject+1;
                }
                if ($row['status']==3 && $row['type']==1){
                    $postponedNopProject=$postponedNopProject+1;
                }

                $amountTotal=$amountTotal+$row['cost'];
                if ($row['type']==1){
                    $amountWpTotal=$amountWpTotal+$row['cost'];
                }
                if ($row['type']==2){
                    $amountDotNetTotal=$amountDotNetTotal+$row['cost'];
                }
                if ($row['type']==3){
                    $amountNopCommerceTotal=$amountNopCommerceTotal+$row['cost'];
                }
            }

        }


        return [
            'result_total'=>$res_total,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'paidProject'=>$paidProject,
            'waitProject'=>$waitProject,
            'postponesProject'=>$postponesProject,
            'paidWpProject'=>$paidWpProject,
            'waitWpProject'=>$waitWpProject,
            'postponedWpProject'=>$postponedWpProject,
            'amountTotal'=>$amountTotal,
            'amountWpTotal'=>$amountWpTotal,
            'amountDotNetTotal'=>$amountDotNetTotal,
            'amountNopCommerceTotal'=>$amountNopCommerceTotal,
            'paidDotNetProject'=>$paidDotNetProject,
            'waitDotNetProject'=>$waitDotNetProject,
            'postponedDotNetProject'=>$postponedDotNetProject,
            'paidNopProject'=>$paidNopProject,
            'waitNopProject'=>$waitNopProject,
            'postponedNopProject'=>$postponedNopProject,
        ];

    }

}

?>