<?php

class model_form extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getSocial()
    {

        $sql = 'SELECT * FROM tbl_social';
        $res = $this->doSelect($sql);
        return $res;

    }

    function addForm($data = [], $file, $pdf)
    {

        $name = $data['name'];
        $address = $data['address'];
        $tel = $data['tel'];
        $isLogo = $data['islogo'];
        $mainColor = $data['maincolor'];
        $accentColor = $data['accentcolor'];
        $isGuideline = $data['isguideline'];
        $pros = $data['pros'];
        $siteContent = $data['sitecontent'];
        $siteDesign = $data['sitedesign'];
        $rival = $data['rival'];
        $notes = $data['mainnotes'];
        $social = '';
        if (isset($data['social'])) {
            $social = $data['social'];
            $social = join(',', $social);
        }
        $shop = $data['yesOrNo'];
        $product = $data['product'];
        $specialProduct = $data['specialproduct'];
        $photo = '';
        if (isset($data['photo'])) {
            $photo = $data['photo'];
        }
        $introduction = $data['introduction'];
        $userFacilities = $data['userfacilities'];
        $shopFacilities = $data['shopfacilities'];

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
        $targetMain = 'assets/form/logo/';
        $newName = 'logo' . time();

        /******** pdf  *****/

        $pdfName = $pdf['name'];
        $pdfSize = $pdf['size'];
        $pdfTmp = $pdf['tmp_name'];
        $pdfType = $pdf['type'];
        $pdfError = $pdf['error'];
        $uploadOk = 1;
        $pdfMain = 'assets/form/file/';
        $newname = 'file' . time();

        /******** pdf  *****/

        if ($pdfSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $extPdf = pathinfo($pdfName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            $fileTarget = $pdfMain . $newname . '.' . $extPdf;

            move_uploaded_file($fileTmp, $target);
            move_uploaded_file($pdfTmp, $fileTarget);

            if (!empty($name)) {
                $sql = 'INSERT INTO tbl_form (name,address,tel,islogo,logo,maincolor,accentcolor,isguideline,guideline,pros,sitecontent,sitedesign,rival,mainnotes,social,shop,product,specialproduct,photo,introduction,userfacilities,shopfacilities,date,time) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
                $params = [$name, $address, $tel, $isLogo, $target, $mainColor, $accentColor, $isGuideline, $fileTarget, $pros, $siteContent, $siteDesign, $rival, $notes, $social, $shop, $product, $specialProduct, $photo, $introduction, $userFacilities, $shopFacilities, $date_jalali, $time];
                $this->doQuery($sql, $params);
            } else {
                $error = 'لطفا نام مجموعه خود را وارد کنید!';
            }

            header('location:' . URL . 'form?message=' . $error);

        }

    }

}

?>