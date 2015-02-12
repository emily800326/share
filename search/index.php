<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../api/reset.css"/>
<link rel="stylesheet" href="../style.css"/>
<link rel="icon" type="image/ico" href="../api/img/share.png">
<link href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" rel="stylesheet">
<link rel="stylesheet" href="api/search.css"/>

<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="../api/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/cupertino/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="api/search.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script>
<script type="text/javascript" src="../api/jquery.dataTables.columnFilter.js"></script>



<title>查詢</title>

</head>

<body>

<div id="main">

<div id="top">
  <div id="banner1" style="position:relative;top:40px;text-align:center;font-size:50px;color:white;">查詢

  </div>
  <div id="function" style="width:100%;position:relative;top:50px;text-align:right">
   <a href="../ssearch" >[搜尋2]</a>
   <a href="print.php" >[匯出excel檔]</a>
   <a href="../" id="goindex">[功能首頁]</a>
  </div>

</div>

	
<div id="middle">


     <div class="tabledata">

         <table id ="table_s"  >

            <thead>
                 <tr>
                       
                        <th >著作名稱</th>
                        <th >類型</th>
                        <th >作者</th>
                        <th >發表時間</th>
                        <th >計畫編號</th>
                        <th >詳細資料</th>
				</tr>
          </thead>


           <tbody>
                    <?php
                include('../api/db.php');

                $get_pic_sql = "SELECT * FROM `paper`  " ;//set sql   SQL語法正確
                $get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());
                $total_fields=mysql_num_fields($get_pic_qry);// 取得欄位數
                $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數
                $total_id=array();
                $count_id=0;
                for ($i=0;$i<$total_records;$i++) {
                $row = mysql_fetch_assoc($get_pic_qry);

                $total_id[$count_id]=$row['ID'];
                $count_id++;

                echo '
                        <tr>

                            <td>'.$row['title'].'</td>
                            <td>'.$row['type'].'</td>
                            <td>'.$row['author1'].'</td>
                            <td>'.$row['year'].'</td>
                            <td>'.$row['number'].'</td>
                           <td><button><a href=../search/search1.php?ID='.$row['ID'].' target="_blank">more</button></td>
                        </tr>';

                 }
                //將陣列以欄位名索引
                ?>
           </tbody>
    </table>

    </div>


</div>


<script>
<?php

		$php_array = $total_id;
		$js_array = json_encode($php_array);
		echo "var button_array = ". $js_array . ";\n";

?>
		var conut=<?php echo $count_id; ?>;

		for(var i=0;i<=conut;i++){

			$("#button-"+button_array[i]).click(function(event){
				var NNNN=$(this).attr("id");
				console.log(NNNN);
			});

		}



</script>




<?php


include('../footer.php');

?>


</div>


</body>
</html>