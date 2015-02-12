<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../api/reset.css"/>
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="api/edit.css"/>
<link rel="icon" type="image/ico" href="../api/img/share.png">
<link href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="../api/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<link rel="stylesheet" href="api/jquery.dataTables.css"/>
-->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/cupertino/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="api/edit.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script>

<title>修改/刪除</title>

</head>

<body>

<div id="main">

<div id="top">
  <div id="banner1" style="position:relative;top:40px;text-align:center;font-size:50px;color:white;">修改/刪除

  </div>
  <div id="function" style="width:100%;position:relative;top:50px;text-align:right">
  <a href="../" id="goindex">[功能首頁]</a>
  </div>

</div>



<div id="middle">

 	<div id="tabs">

	  <ul>
	    <li><a href="#tabs-1">期刊論文</a></li>
	    <li><a href="#tabs-2">研討會論文</a></li>
	    <li><a href="#tabs-3">學生論文</a></li>
	    <li><a href="#tabs-4">專書</a></li>
	  </ul>


	  <div id="tabs-1">
	  	<div class="tabledata" >
	  	    <table id ="table_1"  >
                <thead>
                      <tr>
                        <td >論文名稱</th>
                        <td >APA格式</th>
                        <td >編輯</th>
                      </tr>
                </thead>

                <tbody>
                <?php
                include('../api/db.php');
                $get_pic_sql = "SELECT * FROM `paper` WHERE `type`='期刊論文' " ;//set sql   SQL語法正確
                $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
                $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
                $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
                for ($i=0;$i<$total_records;$i++) {
                $row = mysql_fetch_assoc($get_pic_qry);
                 //print_r($row);
                echo "
                        <tr>
                            <td>".$row['title']."</td>
                            <td>".$row['author1'].".(".$row['year'].")".$row['title']."".$row['magazine'].",".$row['page']."
                            </td>

                            <td><button><a href=../Edit/edit1.php?ID=".$row['ID'].">修改</a></button>
                             <button onclick='delCheck()'><a href=../Edit/delete.php?ID=".$row['ID']." >刪除</a></button></td>
                        </tr>";
                 }

                ?>
                <tbody>
                </table>
            </div>
	  </div>

	  <div id="tabs-2">
	  	<div class="tabledata" >
                 <table id ="table_2"  >
                  <thead>
                   <tr>
                        <td >論文名稱</th>
                        <td >會議</th>
                        <td >APA格式</th>
                        <td >編輯</th>
                      </tr>
                  </thead>

                  <tbody>
                <?php
                include('../api/db.php');
                $get_pic_sql = "SELECT * FROM `paper` WHERE `type`='研討會論文' " ;//set sql   SQL語法正確
                $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
                $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
                $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
                for ($i=0;$i<$total_records;$i++) {
                $row = mysql_fetch_assoc($get_pic_qry);
                echo "
                        <tr>
                            <td>".$row['title']."</td>
                            <td>".$row['meetstart']."至".$row['meetend']."間"."</td>
                            <td>".$row['author1'].".(".$row['year'].")".$row['title']."".$row['magazine'].",".$row['page']."
                            </td>
                            <td><button><a href=../Edit/edit2.php?ID=".$row['ID'].">修改</a></button>
                            <button onclick='delCheck()'><a href=../Edit/delete.php?ID=".$row['ID']." >刪除</a></button></td>

                        </tr>";
                 }
                ?>
                </tbody>
                </table>
            </div>
	  </div>

	  <div id="tabs-3">
	  	<div class="tabledata" >
                 <table id ="table_3"  >
                  <thead>
                      <tr>
                        <td >論文名稱</th>
                        <td >作者</th>
                        <td >學生類別</th>
                        <td >發表時間</th>
                        <td >口試時間</th>
                        <td >計劃編號</th>
                        <td >關鍵字</th>
                        <td >編輯</th>
                      </tr>
                  </thead>

                  <tbody>
                <?php
                include('../api/db.php');
                $get_pic_sql = "SELECT * FROM `paper` WHERE `type`='學生論文' " ;//set sql   SQL語法正確
                $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
                $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
                $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
                for ($i=0;$i<$total_records;$i++) {
                $row = mysql_fetch_assoc($get_pic_qry);
                echo "
                        <tr>
                            <td>".$row['title']."</td>
                            <td>".$row['author1']."</td>
                            <td>".$row['study']."".$row['studytype']."</td>
                            <td>".$row['year']."年"."</td>
                            <td>".$row['testdate']."</td>
                            <td>".$row['number']."</td>
                            <td>".$row['tag']."</td>
                            <td><button ><a href=../Edit/edit3.php?ID=".$row['ID'].">修改</a></button>
                            <button onclick='delCheck()'><a href=../Edit/delete.php?ID=".$row['ID'].">刪除</a></button></td>

                        </tr>";
                 }
                ?>
                </tbody>
                </table>
            </div>
	  </div>

	  <div id="tabs-4">
	  	<div class="tabledata" >

                 <table id ="table_4"  >
                  <thead>
                      <tr>
                        <td >專書名稱</th>
                        <td >ISBN</th>
                        <td >語言</th>
                        <td >專書資訊</th>
                        <td >編輯</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php
                include('../api/db.php');
                $get_pic_sql = "SELECT * FROM `paper` WHERE `type`='專書' " ;//set sql   SQL語法正確
                $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
                $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
                $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
                for ($i=0;$i<$total_records;$i++) {
                $row = mysql_fetch_assoc($get_pic_qry);
                echo "
                        <tr>
                            <td>".$row['title']."</td>
                            <td>".$row['ISSN']."</td>
                            <td>".$row['language']."</td>
                            <td>".$row['bookinfo']."</td>
                            <td><button><a href=../Edit/edit4.php?ID=".$row['ID'].">修改</a></button>
                            <button onclick='delCheck()'><a href=../Edit/delete.php?ID=".$row['ID'].">刪除</a></button></td>
                        </tr>";
                 }

                ?>
                </tbody>
                </table>
            </div>
	  </div>

	</div>



</div>




 <?php

include('../footer.php');

?>


</div>


</script>


</body>
</html>
