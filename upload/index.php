<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../api/reset.css"/>
<link rel="stylesheet" href="../style.css"/>
<link rel="stylesheet" href="api/upload.css"/>
<link rel="icon" type="image/ico" href="../api/img/share.png">
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="../api/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/cupertino/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script type="text/javascript" src="api/upload.js"></script>




<title>新增著作</title>

</head>

<body>

<div id="main">

<div id="top">
  <div id="banner1" style="position:relative;top:40px;text-align:center;font-size:50px;color:white;">新增著作

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
 <form action="sentdata1.php" name="tabs-1data" method="post" enctype="multipart/form-data">
      <label class="table_name" style="color:red;" >請詳細填寫期刊論文資料</label>
      <input id="type"  name='type' style="display: none;" value="期刊論文">
      <table  class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>著作名稱：</p></th>
          <td colspan="5"><input type="text" name="title" size=80; /></td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>作者：</p></th>
          <td colspan="4"><input type="text" name="author1" placeholder="以,分隔作者" size=80; /></td>
		  <!--     <td colspan="1"><input type="text" name="author2" /></td>
          <td colspan="1"><input type="text" name="author3" /></td>
          <td colspan="1"><input type="text" name="author4" /></td>
          <td colspan="1"><input type="text" name="author5" /></td> -->
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authorlist">
              <option value=""></option>
              <option value="第一作者" >第一作者</option>
              <option value="第二作者" >第二作者</option>
              <option value="第三作者" >第三作者</option>
              <option value="其他作者" >其他作者</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authormail">
              <option value="" ></option>
              <option value="是" >是</option>
              <option value="否" >否</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>收錄資料庫：</p></th>
          <td colspan="5">
            <select id="database" name="database">
              <option value=""></option>
 	             <option value="SCI">SCI</option>
           		 <option value="SSCI">SSCI</option>
              	 <option value="A&HCI">A&HCI</option>
              	 <option value="TSSCI">TSSCI</option>
                 <option value="THCI">THCI</option>
                 <option value="EI">EI</option>
              <option value="科技部認定之核心期刊">科技部認定之核心期刊</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>收錄期刊：</p></th>
          <td colspan="5"><input type="text" name="magazine" /></td>
        </tr>
        <tr>
          <th align="right" ><p>期刊ISSN碼：</p></th>
          <td colspan="5"><input type="text" name="ISSN" placeholder="ISSN XXXX-XXXX"/></td>
        </tr>
        <tr>
          <th align="right" ><p>文章DOI碼：</p></th>
          <td colspan="5"><input type="text" size="30" name="DOI" placeholder="DOI xx.xxxx/jmbi.199x.xxxx"/></td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td ><input type="number" placeholder="年" name="year" min="1911"/>年</td>
        </tr>
        <tr> 
          <th align="right" ><p>期別及起訖頁數：</p></th>
          <td colspan="5"><input type="text" placeholder="請依照apa格式" name="page" /></td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></th>
          <td colspan="5"><input type="file" name="myfile" size="50"/></td>
        </tr>
        <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5"><input type="text" name="number" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5"><input type="text" name="tag" placeholder="以,分隔關鍵字" size=80;/></td>
        </tr>
      </table>
      <input type="submit" value="送出資料" name="submit1"  onclick="return(confirm('確認要送出資料嗎？'))">
    </form>
     </div>


	 <div id="tabs-2">

 <form action="sentdata2.php" name="tabs-2data" method="post" enctype="multipart/form-data">
      <p class="table_name" style="color:red;" >請詳細填寫研討會論文資料</p>
       <input id="type"  name='type' style="display: none;" value="研討會論文">     
      <table class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>著作名稱：</p></th>
          <td colspan="5"><input type="text" name="title" size=80;/></td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>作者：</p></th>
          <td colspan="4"><input type="text" name="author1" placeholder="以,分隔作者" size=80;/></td>
	  <!-- 	     <td colspan="1"><input type="text" name="author2" /></td>
          <td colspan="1"><input type="text" name="author3" /></td>
          <td colspan="1"><input type="text" name="author4" /></td>
          <td colspan="1"><input type="text" name="author5" /></td> -->
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authorlist">
              <option value=""></option>
              <option value="第一作者">第一作者</option>
              <option value="第二作者">第二作者</option>
              <option value="第三作者">第三作者</option>
              <option value="其他作者">其他作者</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authormail">
              <option value="" ></option>
              <option value="是" >是</option>
              <option value="否" >否</option>
            </select>
          </td>
        </tr>

        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td ><input type="number" placeholder="年" name="year" min="1911"/>年</td>
        </tr>
        <tr>
          <th align="right" ><p>會議名稱：</p></th>
          <td colspan="5"><input type="text"  name="meetname" /></td>
        </tr>
        <tr>
          <th align="right" ><p>會議地區：</p></th>
          <td colspan="5">
            <select id="state" name="state">
              <option value="" ></option>
              <option value="國內" >國內</option>
              <option value="國際" >國際</option>
            </select>
          </td>
        </tr>

        <tr>
          <th align="right" ><p>會議地點：</p></th>
          <td colspan="5"><input type="text"  name="place" /></td>
        </tr>
         <tr>
          <th align="right" ><p>會議時間：</p></th>
          <td ><input type="date" placeholder="開始日期" name="meetstart" /></td>
          <td><label for="~">~</label></td>
          <td ><input type="date" placeholder="結束日期" name="meetend" /></td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></th>
          <td colspan="5"><input type="file" name="myfile" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5"><input type="text" name="number" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5"><input type="text" name="tag" placeholder="以,分隔關鍵字" size=80;/></td>
        </tr>
      </table>
     <input type="submit" value="送出資料" onclick="return(confirm('確認要送出資料嗎？'))">
    </form>
     </div>

	 <div id="tabs-3">
 <form action="sentdata3.php" name="tabs-3data" method="post" enctype="multipart/form-data" >
      <p class="table_name" style="color:red;" name="type" >請詳細填寫學生論文資料</p>
      <input id="type"  name='type' style="display: none;" value="學生論文">      
      <table class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>著作名稱：</p></th>
          <td colspan="5"><input type="text" name="title" size=80;/></td>
        </tr>
        <tr>
          <th align="right" class="table_title" ><p>作者：</p></th>
          <td colspan="4"><input type="text" name="author1" placeholder="以,分隔作者" size=80;/></td>
		 <!--  <td colspan="1"><input type="text" name="author2" /></td>
          <td colspan="1"><input type="text" name="author3" /></td>
          <td colspan="1"><input type="text" name="author4" /></td>
          <td colspan="1"><input type="text" name="author5" /></td> -->
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authorlist">
              <option value="第一作者">第一作者</option>
              <option value="第二作者">第二作者</option>
              <option value="第三作者">第三作者</option>
              <option value="其他作者">其他作者</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>所屬單位系所：</p></th>
          <td colspan="5"><input type="text" name="from" /></td>
        </tr>
        <tr>
          <th align="right" ><p>學生入學年度：</p></th>
          <td colspan="5"><input type="number" name="study" min="90"/>年度入學</td>
        </tr>
        <tr>
          <th align="right" ><p>學生類別：</p></th>
          <td colspan="5">
            <select id="studytype" name="studytype">
              <option value=""></option>
              <option value="碩士生">碩士生</option>
              <option value="博士生">博士生</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td ><input type="number" placeholder="年" name="year" min="1911"/>年</td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></th>
          <td colspan="5"><input type="file" name="myfile" size="50"/></td>
        </tr>
        <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5"><input type="text" name="number" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5"><input type="text" name="tag" placeholder="以,分隔關鍵字" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>口試日期：</p></th>
          <td colspan="5"><input type="date" name="testdate" /></td>
        </tr>
      </table>
     <input type="submit" value="送出資料" onclick="return(confirm('確認要送出資料嗎？'))">
    </form>
     </div>


	 <div id="tabs-4">
 <form action="sentdata4.php" name="tabs-4data" method="post" enctype="multipart/form-data">
      <p class="table_name" style="color:red;">請詳細填寫專書資料</p>
      <input id="type"  name='type' style="display: none;" value="專書">      
      <table class="detail_table">
        <tr>
          <th align="right" class="table_title" ><p>著作名稱：</p></th>
          <td colspan="5"><input type="text" name="title" size=80;/></td>
        </tr>
        <tr>
          <th align="right" class="table_title" >作者：</p></th>
          <td colspan="4"><input type="text" name="author1" placeholder="以,分隔作者" size=80;/></td>
		<!--   <td colspan="1"><input type="text" name="author2" /></td>
          <td colspan="1"><input type="text" name="author3" /></td>
          <td colspan="1"><input type="text" name="author4" /></td>
          <td colspan="1"><input type="text" name="author5" /></td> -->
        </tr>
        <tr>
          <th align="right" ><p>作者順序：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authorlist">
              <option value=""></option>
              <option value="第一作者">第一作者</option>
              <option value="第二作者">第二作者</option>
              <option value="第三作者">第三作者</option>
              <option value="其他作者">其他作者</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>是否為通訊作者?：</p></th>
          <td colspan="5">
            <select id="authorlist" name="authormail">
              <option value="Y" >是</option>
              <option value="N" >否</option>
            </select>
          </td>
        </tr>
        <tr>
          <th align="right" ><p>專書ISBN碼：</p></th>
          <td colspan="5"><input type="text" name="ISSN" placeholder="ISBN XXXX-XXXX"/></td>
        </tr>
        <tr>
          <th align="right" ><p>語言分類：</p></th>
          <td colspan="5">
            <select id="laguage" name="language">
              <option value="中文">中文</option>
              <option value="英文">英文</option>
            </select>
          </td>
        </tr>
         <tr>
          <th align="right" ><p>專書名：</p></th>
          <td colspan="5"><input type="text"  name="bookname" size="80"/></td>
        </tr>
         <tr>
          <th align="right" ><p>專書出版社：</p></th>
          <td colspan="5"><input type="text"  name="bookstore" size="80"/></td>
        </tr>        
         <tr>
          <th align="right" ><p>專書資訊：</p></th>
          <td colspan="5"><textarea type="text" name="bookinfo" cols="20" /></textarea></td>
        </tr>
        <tr>
          <th align="right" ><p>出版時間：</p></th>
          <td><input type="number" placeholder="年" name="year" min="1911"/>年</td>
        </tr>
        <tr>
          <th align="right" ><p>期別及起訖頁數：</p></th>
          <td colspan="5"><input type="text"  name="page" /></td>
        </tr>
        <tr>
          <th align="right" ><p>上傳檔案：</p></th>
          <td colspan="5"><input type="file" name="myfile" size="50"/></td>
        </tr>
        <tr>
          <th align="right" ><p>計畫編號：</p></th>
          <td colspan="5"><input type="text" name="number" size=80;/></td>
        </tr>
        <tr>
          <th align="right" ><p>關鍵字：</p></th>
          <td colspan="5"><input type="text" name="tag" placeholder="以,分隔關鍵字" size=80;/></td>
        </tr>
      </table>
     <input type="submit" value="送出資料"onclick="return(confirm('確認要送出資料嗎？'))" >
    </form>
     </div>

</div>
</div>







 <?php

include('../footer.php');

?>


</div>



</body>
</html>