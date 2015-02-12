<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../api/reset.css"/>
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="api/search.css"/>
<link rel="icon" type="image/ico" href="../api/img/share.png">

<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="../api/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/redmond/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>




<title>詳細資料</title>

</head>

<body>

<div id="main">

<div id="top">
  <div id="banner1" style="position:relative;top:40px;text-align:center;font-size:50px;color:white;">詳細資料

  </div>
  <div id="function" style="width:100%;position:relative;top:50px;text-align:right">
  <a href="../" id="goindex">[功能首頁]</a>
  </div>

</div>



<div id="middle" style="font-size: 20px;td a:link {
color: blue;
font-weight: bold;
}">

	  <?php

       //echo $_GET["ID"]; //ID筆數
       $IIID=$_GET["ID"];

       $get_pic_sql = "SELECT * FROM `paper` WHERE  `ID`='". $IIID."'";
       //print_r($get_pic_sql);
       include('../api/db.php');
	   $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());

       $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數

       $row = mysql_fetch_assoc($get_pic_qry);
        //print_r($row);   //印ID筆數的所有資料
        //
        if($row['type']=="期刊論文"){
          echo   '<br/> <table  class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>論文名稱：</p></th>
          <td >'.$row['title'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" >作者：</p></th>
          <td >'.$row['author1'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td >'.$row['authorlist'].'</td> 
        </tr> 
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td >'.$row['authormail'].' </td>
         </tr> 
        <tr>
          <th align="right" ><p>收錄資料庫：</p></th>
          <td >'.$row['database'].' </td>
         </tr> 
         <tr>
          <th align="right" ><p>收錄期刊：</p></th>
          <td >'.$row['magazine'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>期刊ISSN碼：</p></th>
          <td >'.$row['ISSN'].'</td>
        </tr>
        <tr>
          <th align="right"><p>文章DOI碼：</p></th>
          <td >'.$row['DOI'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td >'.$row['year'].'年</td>
        </tr>
        <tr>
          <th align="right" ><p>期別/起訖頁：</p></th>
          <td >'.$row['page'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></td>
          <td ><a href=../file/'.$row['attachment'].' target="_blank">下載</a></td>
        </tr>  
         <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td >'.$row['number'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td >'.$row['tag'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>上次修改時間：</p></th>
          <td >'.$row['update_time'].'</td>
        </tr>
      </table>';
          
        }elseif($row['type']=="研討會論文"){
          echo   ' <br/><table  class="detail_table">
        <tr>
          <th align="right" ><p>論文名稱：</p></th>
          <td >'.$row['title'].'</td>
        </tr>
        <tr>
          <th align="right"  >作者：</p></th>
          <td >'.$row['author1'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td >'.$row['authorlist'].'</td> 
        </tr> 
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td >'.$row['authormail'].' </td>
         </tr> 
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td >'.$row['year'].'年</td>
        </tr>
        <tr>
          <th align="right" ><p>會議名稱：</p></th>
          <td >'.$row['meetname'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>會議地點：</p></th>
          <td >'.$row['state'].'，'.$row['place'].'</td>
        </tr>
         <tr>
          <th align="right" ><p>會議時間：</p></th>
          <td >'.$row['meetstart'].'到'.$row['meetend'].'止</td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></td>
          <td ><a href=../file/'.$row['attachment'].' target="_blank">下載</a></td>
        </tr>  
         <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td >'.$row['number'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td >'.$row['tag'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>上次修改時間：</p></th>
          <td >'.$row['update_time'].'</td>
        </tr>
      </table>';
        }elseif($row['type']=="學生論文"){

            echo   ' <br/><table  class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>論文名稱：</p></th>
          <td colspan="5">'.$row['title'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" >作者：</p></th>
          <td colspan="1">'.$row['author1'].'</td>
        </tr>
        <tr>
          <th align="right" >口試日期：</p></th>
          <td colspan="5">'.$row['testdate'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">'.$row['authorlist'].'</td> 
        </tr> 
        <tr>
          <th align="right" ><p>所屬單位系所：</p></th>
          <td colspan="5">'.$row['from'].' </td>
         </tr> 
        <tr>
          <th align="right" ><p>學生入學年度：</p></th>
          <td colspan="5">'.$row['study'].'年度入學</td>
        </tr>         
        <tr>
          <th align="right" ><p>學生類別：</p></th>
          <td >'.$row['studytype'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td >'.$row['year'].'年</td>
        </tr>
        <tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></td>
          <td colspan="5"><a href=../file/'.$row['attachment'].' target="_blank">下載</a></td>
        </tr>  
         <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5">'.$row['number'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5">'.$row['tag'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>上次修改時間：</p></th>
          <td colspan="5">'.$row['update_time'].'</td>
        </tr>
      </table>';

        }elseif($row['type']=="專書"){
  echo   '<br/> <table  class="detail_table">
        <tr>
          <th align="right"  ><p>章節標題：</p></th>
          <td colspan="5">'.$row['title'].'</td>
        </tr>
        <tr>
          <th align="right"  >作者：</p></th>
          <td colspan="1">'.$row['author1'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">'.$row['authorlist'].'</td> 
        </tr> 
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td colspan="5">'.$row['authormail'].' </td>
         </tr> 
          <tr>
          <th align="right" ><p>專書ISSN碼：</p></th>
          <td colspan="5">'.$row['ISSN'].'</td>
        </tr>
         <tr>
          <th align="right" ><p>語言分類：</p></th>
          <td colspan="5">'.$row['language'].'</td>
        </tr>  
         <tr>
          <th align="right" ><p>收錄書籍：</p></th>
          <td colspan="5">'.$row['bookname'].'</td>
        </tr>
          <tr>
          <th align="right" ><p>專書出版社：</p></th>
          <td colspan="5">'.$row['bookstore'].'</td>
        </tr>               
         <tr>
          <th align="right" ><p>專書資訊：</p></th>
          <td colspan="5">'.$row['bookinfo'].'</td>
        </tr>            
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td >'.$row['year'].'年</td>
        </tr>
        <tr>
          <th align="right" ><p>期別/起訖頁：</p></th>
          <td colspan="5">'.$row['page'].'</td>
        </tr>        
        <tr>
          <th align="right" ><p>上傳檔案：</p></td>
          <td colspan="5"><a href=../file/'.$row['attachment'].' target="_blank">下載</a></td>
        </tr>  
         <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5">'.$row['number'].'</td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5">'.$row['tag'].'</td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>上次修改時間：</p></th>
          <td colspan="5">'.$row['update_time'].'</td>
        </tr>
      </table>';         
        }
     
	  ?>

</div>


 <?php

include('../footer.php');

?>


</div>



</body>
</html>


  <style type="text/css"> 
     th{
		color:blue;
		white-space:nowrap;
		}
	 a:link {
        color: #3F7290;
        font-weight: bold;
       }

  </style> 
