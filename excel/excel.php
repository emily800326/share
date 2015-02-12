<?php

//引入PHPExcel函式庫
include("../api/Classes/PHPExcel.php");
include("../api/Classes/PHPExcel/IOFactory.php");
include('../api/db.php');
// 創建一個excel
$objPHPExcel = new PHPExcel();
// 設置屬性
/*$objPHPExcel->getProperties()->setCreator("測試作者")//作者
   ->setLastModifiedBy("測試修改者")//最後修改者
   ->setTitle("測試標題")//標題
   ->setSubject("測試主旨")//主旨
   ->setDescription("測試註解")//註解
   ->setKeywords("測試標記")//標記
   ->setCategory("測試類別");//類別*/

$objPHPExcel = new PHPExcel();

$objPHPExcel->getActiveSheet()->getDefaultColumnDimension()->setWidth(16);//設置單元格寬度
$objPHPExcel->getActiveSheet()->setTitle('論文詳細資料');//設置當前工作表的名稱

//註：單元格第一豎是以0開始的，第一行是以1開始的。
  $rowVal = array(0=>'著作名稱', 1=>'類型', 2=>'作者',3=>'發表時間');
  foreach($rowVal as $k=>$r){
       $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($k, 1)->getFont()->setBold(true);
       $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($k, 1, $r);
                            }
    /*設置第一行標題
    $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow(0, 1)->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, '著作名稱');
    $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow(1, 1)->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, '類型');
    $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow(2, 1)->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, '作者');
    $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow(3, 1)->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, '發表時間');*/

  $get_pic_sql = "SELECT * FROM `paper`  " ;//set sql   SQL語法正確
  $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
  $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
  $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
  $total_id=array();
  $count_id=0;

for($i=2;$i<$total_records;$i++){
     $row = mysql_fetch_assoc($get_pic_qry);
     $total_id[$count_id]=$row['ID'];
     $count_id++;
     $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $row['title']);
     $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $row['type']);
     $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $row['author1']);
     $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $i, $row['year']);
                                 }

                           
    /***********************
    一般這些數據都是從數據庫查詢出來，然後循環輸出。
    如:$rs是一個從數據庫查詢出來的數組
    $count = count($rs);
    for($i=2;$i<$count+2;$i++){
         $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $rs['date']);
         $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $rs['ip']);
         $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $i, $rs['email']);
    }
    ***********************/

$objPHPExcel->setActiveSheetIndex(0);//設置打開excel時顯示哪個工作表
$excelName = '論文資訊_'.date("YmdHis").'.xls';//設置導出excel的文件名

$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); //非2007格式
//保存excel—2007格式 $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename=".urlencode($excelName));
header("Content-Transfer-Encoding: binary");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
$objWriter->save('php://output');

?>

