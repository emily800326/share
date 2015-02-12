<?php

include('../api/db.php');

//接收查詢資料
$title		  =$_POST["title"];
$author1	  =$_POST["author1"];
$authorlist	  =$_POST["authorlist"];
$authormail	  =$_POST["authormail"];
$database	  =$_POST["database"];
$magazine     =$_POST["magazine"];
$ISSN		  =$_POST["ISSN"];
$DOI 		  =$_POST["DOI"];
$year		  =$_POST["year"];
//$month	  =$_POST["month"];
$page		  =$_POST["page"];
//$myfile	  =$_POST["myfile"];
$number		  =$_POST["number"];
$tag		  =$_POST["tag"];
$fileSN=$_POST["fileSN"];
//$time 	  =$_POST["time"];

 $IIID=$_GET["ID"];
     
     //亂數檔名生產
  
   function GetNewID(){
                $ranNum = rand(10000,99999);
                $time=date('YmdHis');
                $GetNewID=$time.$ranNum;
                return $GetNewID;
                }

      //取得一個亂數檔名
    $upload_name = $fileSN.".".substr( $_FILES["myfile"]["name"], ( strrpos($_FILES["myfile"]["name"], '.') + 1 ) );
    $upload_file = "../file/" . $to = iconv("UTF-8", "Big5", $upload_name);
    
    $fileExit=false;  //沒有更新檔案存在

      //將上傳的檔案由暫存目錄移至指定之目錄
      if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_file))
      {
        echo "<strong>檔案上傳成功</strong><hr>";
        //顯示檔案資訊
        echo "檔案名稱：" . $_FILES["myfile"]["name"] . "<br>";
        echo "暫存檔名：" . $_FILES["myfile"]["tmp_name"] . "<br>";
        echo "檔案大小：" . $_FILES["myfile"]["size"] . "<br>";
        echo "檔案種類：" . $_FILES["myfile"]["type"] . "<br>";

        $fileExit=true; //有更新檔案存在
      }
      else
      {
        echo "檔案上傳失敗 (" . $_FILES["myfile"]["error"] . ")<br><br>";
        $fileExit=false; //沒有更新檔案存在

      } 
            


if($fileExit){
  mysql_query("UPDATE `paper` set `title`   = '".$title."',
                `author1`   = '".$author1."',
                `authorlist`  = '".$authorlist."',
                `authormail`  = '".$authormail."',
                `database`    = '".$database."',
                `magazine`    = '".$magazine."',
                `ISSN`      = '".$ISSN."',
                `DOI`     = '".$DOI."',
                `year`      = '".$year."',
                `page`      = '".$page."',
                `number`    = '".$number."',
                `attachment`  = '".$upload_file."',
                `tag`     = '".$tag."',
                `update_time`   = NOW()
                WHERE  `ID`='". $IIID."'",$link) or die(mysql_error());
}else{
  mysql_query("UPDATE `paper` set `title`   = '".$title."',
                `author1`   = '".$author1."',
                `authorlist`  = '".$authorlist."',
                `authormail`  = '".$authormail."',
                `database`    = '".$database."',
                `magazine`    = '".$magazine."',
                `ISSN`      = '".$ISSN."',
                `DOI`     = '".$DOI."',
                `year`      = '".$year."',
                `page`      = '".$page."',
                `number`    = '".$number."',

                `tag`     = '".$tag."',
                `update_time`   = NOW()
                WHERE  `ID`='". $IIID."'",$link) or die(mysql_error());
}





?>

<HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>修改完成</title>
</head>

<BODY>

    <p align="center"><font size="2"><a href="../">修改完成,自動跳轉至功能頁面!</a></font></p>
    <meta http-equiv=REFRESH CONTENT=0.5;url=../index.php><!--  自動轉跳回功能頁面-->
</html>

