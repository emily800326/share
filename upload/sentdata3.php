<?php

include('../api/db.php');
//接收查詢資料
$type		  =$_POST["type"];
$title		  =$_POST["title"];
$author1	  =$_POST["author1"];
// $author2	  =$_POST["author2"];
// $author3	  =$_POST["author3"];
// $author4	  =$_POST["author4"];
// $author5	  =$_POST["author5"];
$authorlist	  =$_POST["authorlist"];
$from	      =$_POST["from"];
$study	      =$_POST["study"];
$studytype    =$_POST["studytype"];
$year		  =$_POST["year"];
//$month		  =$_POST["month"];
//$myfile	  =$_POST["myfile"];
$number		  =$_POST["number"];
$tag		  =$_POST["tag"];
$testdate	  =$_POST["testdate"];
//$time 	  =$_POST["time"];


     //亂數檔名生產
     function GetNewID(){
                $ranNum = rand(10000,99999);
                $time=date('YmdHis');
                $GetNewID=$time.$ranNum;
                return $GetNewID;
                }
      //取得一個亂數檔名
    $upload_name = GetNewID().".".substr( $_FILES["myfile"]["name"], ( strrpos($_FILES["myfile"]["name"], '.') + 1 ) );
    $upload_file = "../file/" . $to = iconv("UTF-8", "Big5", $upload_name);

      //將上傳的檔案由暫存目錄移至指定之目錄
      if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_file))
      {
        echo "<strong>檔案上傳成功</strong><hr>";

        //顯示檔案資訊
        echo "檔案名稱：" . $_FILES["myfile"]["name"] . "<br>";
        echo "暫存檔名：" . $_FILES["myfile"]["tmp_name"] . "<br>";
        echo "檔案大小：" . $_FILES["myfile"]["size"] . "<br>";
        echo "檔案種類：" . $_FILES["myfile"]["type"] . "<br>";
   
      }
      else
      {
        echo "檔案上傳失敗 (" . $_FILES["myfile"]["error"] . ")<br><br>";

      }
   
mysql_query("INSERT INTO `paper`(`type`,
	                            `title`,
								`author1`,
							
								`authorlist`,
								`from`,
								`study`,
								`studytype`,
								`year`,
							
								`number`,
								`attachment`,
								`tag`,
								`testdate`
								)  
							VALUES('".$type."',
								   '".$title."',
								   '".$author1."',
								
								   '".$authorlist ."',
								   '".$from."',
								   '".$study."',
								   '".$studytype."',
								   '".$year."',
								  
								   '".$number."',
								   '".$upload_file."',
								   '".$tag."',
								   '".$testdate."')",$link) or die(mysql_error());


?>

<HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>新增學生論文完成</title>
</head>

<BODY>

<p align="center"><font size="2"><a href="../">新增學生論文完成,自動跳轉至功能頁面!</a></font></p>
 <meta http-equiv=REFRESH CONTENT=1;url=../index.php><!-- 自動轉跳回功能頁面-->

</html>

