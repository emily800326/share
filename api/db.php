<?php

$link = mysql_connect("localhost","root","ytwu57874") or exit( mysql_error() );
mysql_select_db("share",$link) or die("db連線失敗");
mysql_query("set names utf8");

?>