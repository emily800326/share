<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../api/reset.css"/>
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="api/edit.css"/>
<link rel="icon" type="image/ico" href="../api/img/share.png">
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="../api/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/redmond/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script type="text/javascript" src="api/edit.js"></script>



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
 
	  <?php 

      // echo $_GET["ID"];
       $IIID=$_GET["ID"];

       

       $get_pic_sql = "SELECT * FROM `paper` WHERE `type`='學生論文' and `ID`='". $IIID."'";;
       //print_r($get_pic_sql);
       include('../api/db.php');
		$get_pic_qry = mysql_query($get_pic_sql, $link) or die(mysql_error());

        $total_records=mysql_num_rows($get_pic_qry); // 取得記錄筆數

        $row = mysql_fetch_assoc($get_pic_qry);
       // print_r($row);

        echo '<form name="form" method="post" action="update_finish3.php?ID='.$IIID.'" enctype="multipart/form-data">';
       

    echo' <table  class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>學生論文名稱：</p></th>
          <td colspan="5"><input type="text" name="title" value="'.$row['title'].'"size=80></td>
        </tr>
        <tr>
          <th align="right" class="table_title" >作者：</p></th>
          <td colspan="1"><input type="text" name="author1" value="'.$row['author1'].'"size=80></td>

        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authorlist" value="'.$row['authorlist'].'"> ';
            $arrayName = array( "" ,                      
                                "第一作者" ,                  
                                "第二作者" , 
                                "第三作者" , 
                                "其他作者" , 
                               );  
            foreach ($arrayName as $key => $value) {
              if($row['authorlist']==$value){
                echo '<option value="'.$value.'" selected>'.$value.'</option>';
              }else{
                echo '<option value="'.$value.'">'.$value.'</option>';
              }   
            }
   echo'    </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>所屬單位系所：</p></th>
          <td colspan="5"><input type="text" name="from"  value="'.$row['from'].'"></td>
        </tr>
        <tr>
          <th align="right" ><p>學生入學年度：</p></th>
          <td colspan="5"><input type="number" name="study" min="90" value="'.$row['study'].'">年度入學</td>
        </tr>
        <tr>
          <th align="right" ><p>學生類別：</p></th>
          <td colspan="5">
            <select id="studytype" name="studytype" value="'.$row['studytype'].'">';
            $arrayName = array( "" ,                      
                                "碩士生" ,                  
                                "博士生" ,
                               );  
            foreach ($arrayName as $key => $value) {
              if($row['studytype']==$value){
                echo '<option value="'.$value.'" selected>'.$value.'</option>';
              }else{
                echo '<option value="'.$value.'">'.$value.'</option>';
              }   
            }
   echo'    </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td ><input type="number"  name="year" min="1911" value="'.$row['year'].'"></td>
          <td><label for="年">年</label></td>
        </tr>
        <tr>';

        $filefile=explode ('..',$row['attachment']);
        $filestyle=explode ('.',$filefile[1]);
        $filename=explode ('file/',$filestyle[0]);
         //print_r($TT);
        // print_r('fileType==>'.$QQ1[1]);
        if($filestyle[1]==''){
          // print_r('Nofile');
          echo '
          <th align="right" ><p>上傳檔案：</p></td>
          <td colspan="5"><input type="file" name="myfile" size="50" value="'.$row['attachment'].'">
            <input type="text" name="fileSN" value="'.$filename[1].'" style="display: none;"></td>
          ';
        }else{

          $tttt='<a class="btn" type="button" href="'.$row['attachment'].'" style="color: #000;">下載原上傳檔案</a><span> 或替換檔案</span>';         
          echo '
          <th align="right" ><p>上傳檔案：</p></td>
          <td colspan="5">'.$tttt.'<input type="file" name="myfile" size="50" value="'.$row['attachment'].'">
              <input type="text" name="fileSN" value="'.$filename[1].'" style="display: none;"></td>
          </td>

          ';


        }
        echo '
        </tr>
        <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5"><input type="text" name="number" value="'.$row['number'].'"></td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5"><input type="text" name="tag" value="'.$row['tag'].'"size=80></td>
        </tr>
        <tr>
          <th align="right" >口試日期：</p></th>
          <td colspan="5"><input type="date" name="testdate" value="'.$row['testdate'].'" ></td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>上次修改時間：</p></th>
          <td colspan="5">"'.$row['update_time'].'"</td>
        </tr>
      </table>
      ';
	  ?>
      <input type="submit" value="修改資料" onclick="return(confirm('確認要修改資料嗎？'))">
	 
	</div>         



</div>




 <?php

include('../footer.php');

?>


</div>



</body>
</html>