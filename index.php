<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/ico" href="api/img/share.png">

<link rel="stylesheet" href="api/reset.css"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="api/bottomsystem.css"/>


<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/cupertino/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="api/main.js"></script>
<script type="text/javascript" src="api/interface.js"></script>

<title>Lab研究產出查詢系統</title>

</head>

<body>

<div id="main">

<?php

include('top.php');

?>


<div id="middle" >


<a href="./upload/index.php"><img src="api/img/bupload.png" id="img" ></a>
<a href="./search/index.php"><img src="api/img/bsearch.png" id="img"></a>
<a href="./edit/index.php"><img src="api/img/bedit.png" id="img"></a>



 </div>


<?php
include('footer.php');
include('bottomsystem.php');
?>

</div>



</body>
</html>