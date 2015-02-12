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

<title>動態新增</title>

</head>

<body>


<table >
 <tr>
                	<td>[--新會員--]</td>
                	<td>
                		<table class="table-bordered" >
                		    <?php
                		    $arr = array('一', '二','三','四','五','六','七','八','九','十');
                		    $i = 0;

                		    foreach ($arr as &$value) {
                		        $i++;
								if($i!=1){$temp_forInventors_show_table='style="display: none;"';}else{$temp_forInventors_show_table='';}
								if($i==1){
									$inventorName_CH='data[Inventors][1][Name_CH]';
									$inventorName_EN='data[Inventors][1][Name_EN]';
									$inventorAddress='data[Inventors][1][Address]';
									$inventorMail='data[Inventors][1][Mail]';
								}else{
									$inventorName_CH='""';
									$inventorName_EN='""';
									$inventorAddress='""';
									$inventorMail='""';
								}

                		        echo '
                		        <tbody '. $temp_forInventors_show_table.' id=Inventors_'.$i.'>

                                <tr>
                                    <td rowspan="3" >資料'. $value .'：</td>
                                    <td>
                                        <div>姓名</div>
                                    </td>
                                    <td>
                                        <div>
                                        <input class="input-medium" type="text"  placeholder="中文" name='.$inventorName_CH.' id=Inventors_Name_CH_'.$i.'>
                                        <input class="input-medium" type="text"  placeholder="英文" name='.$inventorName_EN.' id=Inventors_Name_EN_'.$i.'>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>戶籍地址</td>
                                    <td><label><input class="input-xxlarge" type="text" name='.$inventorAddress.'  id=Inventors_Address_'.$i.' ></label></td>
                                </tr>
                                <tr>
                                    <td>電子郵件</td>
                                    <td><label><input class="input-xxlarge" type="text" name='.$inventorMail.'  id=Inventors_Mail_'.$i.' ></label></td>

                                </tr>

                                </tbody>';
                		    } ?>

                		</table>
                		<input class = "Inventors_add" type="button" value="+" name=""/>
                		<input class = "Inventors_hide" type="button" value="-" name="" style="display:none"/>
                		<script>
                		var count_Inventors=1;
                			 $( "input.Inventors_add" ).click(function() {
                		          count_Inventors++;
                		          // console.log(count_Inventors);
                		          if(count_Inventors>1&&count_Inventors<11){
                		          	$('tbody#Inventors_'+count_Inventors).show();

                		          	$('input#Inventors_Name_CH_'+count_Inventors+'.input-medium').val("");
                		          	$('input#Inventors_Name_CH_'+count_Inventors+'.input-medium').attr('name','data[Inventors]['+count_Inventors+'][Name_CH]');

                		            $('input#Inventors_Name_EN_'+count_Inventors+'.input-medium').val("");
                		          	$('input#Inventors_Name_EN_'+count_Inventors+'.input-medium').attr('name','data[Inventors]['+count_Inventors+'][Name_EN]');

                		            $('input#Inventors_Address_'+count_Inventors+'.input-xxlarge').val("");
                		          	$('input#Inventors_Address_'+count_Inventors+'.input-xxlarge').attr('name','data[Inventors]['+count_Inventors+'][Address]');

                		            $('input#Inventors_Mail_'+count_Inventors+'.input-xxlarge').val("");
                		          	$('input#Inventors_Mail_'+count_Inventors+'.input-xxlarge').attr('name','data[Inventors]['+count_Inventors+'][Mail]');



                		              if(count_Inventors==10){
                		                  $( "input.Inventors_add" ).hide();
                		                  $( "input.Inventors_hide" ).show();
                		              }
                		              if(count_Inventors>=2){
                		              	 $( "input.Inventors_hide" ).show();
                		              }
                		          }
                		      });
                		      $( "input.Inventors_hide" ).click(function() {


                		          if(count_Inventors>1&&count_Inventors<11){
                		          	count_Inventors--;
                		          	// console.log(count_Inventors);
                		          	$('tbody#Inventors_'+(count_Inventors+1)).hide();

                		            $('input#Inventors_Name_CH_'+(count_Inventors+1)+'.input-medium').val("");
                		          	$('input#Inventors_Name_CH_'+(count_Inventors+1)+'.input-medium').attr('name',"");

                		            $('input#Inventors_Name_EN_'+(count_Inventors+1)+'.input-medium').val("");
                		          	$('input#Inventors_Name_EN_'+(count_Inventors+1)+'.input-medium').attr('name',"");

                		            $('input#Inventors_Address_'+(count_Inventors+1)+'.input-xxlarge').val("");
                		          	$('input#Inventors_Address_'+(count_Inventors+1)+'.input-xxlarge').attr('name',"");

                		            $('input#Inventors_Mail_'+(count_Inventors+1)+'.input-xxlarge').val("");
                		          	$('input#Inventors_Mail_'+(count_Inventors+1)+'.input-xxlarge').attr('name',"");


                		              if(count_Inventors>=2){
                		              	 $( "input.Inventors_add" ).show();

                		              }
                		              if(count_Inventors==1){
                		              	$( "input.Inventors_hide" ).hide();
                		              }
                		          }
                		      });
                		</script>

                		<script>
                			$('input#Inventors_Name_CH_1').val('<?php echo $this->session->userdata('user_name')?>' );

                			$('input#Inventors_Mail_1').val('<?php echo $this->session->userdata('user_email')?>' );
                		</script>
                	</td>
                </tr>
</table>




</body>
</html>