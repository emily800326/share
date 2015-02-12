<meta charset="utf-8">

<?php

include('../api/db.php');

    $IIID=$_GET["ID"];

    echo '<form name="form" method="post" action="delete_finish.php?ID='.$IIID.'" enctype="multipart/form-data">';

    $sql = "SELECT * FROM `paper` WHERE  `ID`='". $IIID."'";
    $qry = mysql_query($sql, $link) or die(mysql_error());
    $row = mysql_fetch_assoc($qry);

   // mysql_query($sql);


	   if($row['type']=="專書"){
		$sql = "DELETE FROM `paper` WHERE  `ID`='". $IIID."'";
		mysql_query($sql, $link) or die(mysql_error());
		echo "<script>";
		echo "alert('刪除成功!進行頁面刷新!');";
		echo "location.href='index.php';";
		echo "</script> ";	
		}elseif(unlink($row['attachment'])){
		$sql = "DELETE FROM `paper` WHERE  `ID`='". $IIID."'";
		mysql_query($sql, $link) or die(mysql_error());
		echo "<script>";
		echo "alert('刪除成功!進行頁面刷新!');";
		echo "location.href='index.php';";
		echo "</script> ";
		}
		else{
		echo "<script>";
		echo "alert('刪除失敗!進行頁面刷新!');";
		echo "location.href='index.php';";
		echo "</script> ";
		}




   // echo '<meta http-equiv=REFRESH CONTENT=0.01;url=index.php>'; //跳轉回原頁面


?>


