<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/ico" href="../api/img/share.png">
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
<link rel="stylesheet" href="api/ssearch.css"/>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/cupertino/jquery-ui.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../api/jquery.dataTables.columnFilter.js"></script>
<script type="text/javascript" src="api/ssearch.js"></script>
<title>查詢</title>

</head>

<body>
<div id="main">

<div id="top">
  <div id="banner1" style="position:relative;top:40px;text-align:center;font-size:50px;color:white;">查詢

  </div>
  <div id="function" style="width:100%;position:relative;top:50px;text-align:right">
     <a href="../search" >[搜尋1]</a>
  <a href="../" id="goindex">[功能首頁]</a>
  </div>

</div>


  <div id="mwt_mwt_slider_scroll">
     <div id="mwt_fb_tab" >
      <span>搜</span>
      <span>尋</span>
      <span>資</span>
      <span>料</span>
    </div>
    <div id="mwt_slider_content" >
      <table cellpadding="4" cellspacing="0" border="0" style="width: 90%; height:25%; margin: 0 auto 2em auto;color:white;">
          <thead>
            <tr>
              <th></th>
              <th>搜尋</th>
            </tr>
          </thead>

          <tbody>
            <tr id="filter_global">
              <td>搜尋全部欄位</td>
              <td align="center"><input type="text" class="global_filter" id="global_filter"></td>
              <!-- <td align="center"><input type="checkbox" class="global_filter" id="global_regex"></td>
              <td align="center"><input type="checkbox" class="global_filter" id="global_smart" checked=
              "checked"></td>-->
            </tr>
            <tr id="filter_col1" data-column="0">
              <td>著作名稱</td>
              <td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
            </tr>
            <tr id="filter_col2" data-column="1">
              <td>類型</td>
              <td align="center"><input type="text" class="column_filter" id="col1_filter" style='display:none;'>
              	<select id="select_col1_filter" style="width: 172px;">
              		<option>全部</option>
              		<option>期刊論文</option>
              		<option>研討會論文</option>
              		<option>學生論文</option>
              		<option>專書</option>
              	</select>
              	<script>
              		$("#select_col1_filter").change(function(){
              			var col1_filter_index=$("#select_col1_filter ").get(0).selectedIndex; 

              			if(col1_filter_index==0){ //all
              				$("input#col1_filter").val('');
              			}else{
              				//console.log($("#select_col1_filter").val());
							    $("input#col1_filter").val($("#select_col1_filter").val());
              			}
              			filterColumn( $(this).parents('tr').attr('data-column') );
              		});
              	</script>
              </td>
            </tr>
            <tr id="filter_col3" data-column="2">
              <td>作者</td>
              <td align="center"><input type="text" class="column_filter" id="col2_filter"></td>
            </tr>
            <tr id="filter_col4" data-column="3">
              <td>發表時間起</td>
              <td align="center"><input type="text" id="min" name="min" placeholder="西元年"></td>
            </tr>
            <tr id="filter_col4" data-column="3">
              <td>發表時間迄</td>
              <td align="center"><input type="text"  id="max" name="max" placeholder="西元年"></td>
            </tr>            
            <tr id="filter_col5" data-column="4">
              <td>計畫編號</td>
              <td align="center"><input type="text" class="column_filter" id="col4_filter"></td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>

	
<div id="middle">
		 

        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                 <tr>  
                        <th >著作名稱</th>
                        <th >類型</th>
                        <th >作者</th>
                        <th >時間</th>
                        <th >編號</th>
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

<?php
include('../footer.php');
?>


</div>
  

</body>
</html>