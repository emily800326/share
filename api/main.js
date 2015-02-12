$(function(){

	$("#send").on('click', function(){
		var email = prompt('請輸入您的信箱，將資訊寄送至您的信箱', 'email');
		if(email != null){
			$.ajax({
				url      : "api/action.php",
				type     : "POST",
				data : {
					email 	: email,
					action  : 'mail'
				},
				error : function(e, status){
					alert("警告：\n\n網路發生異常!!\n\n請檢查網路連線狀況！！");
					return;
				},
				success : function(data){
					alert(data);
					return;
				}
			});
		}
	});

$("#dialog-form").hide();//新增一筆區塊隱藏

$("#send2").click(function(){

    $("#dialog-form").dialog({
    	title:"聯絡我們!",
    	//autoOpen: false,
        modal: true,
        width: 320,
		height: 510,
        buttons: {
            "送出": function() {
           var emailRegxp = /[\w-]+@([\w-]+\.)+[\w-]+/;
            if(emailRegxp.test($("#email").val() ) != true ){
			alert("電子信箱格式錯誤");
			return;
	       }else if($("#email").val() 	== "" ||
					$("#name").val() 	== "" ||
					$("#content").val()  == ""  ){
			alert("請確認資料是否確實填寫！");
			return;
		    }

          $.ajax({ //ajax傳值
               url:"api/action.php",
		       type:"POST",
		       data:{
		              name:$("#name").val(),
		              email:$("#email").val(),
		              content:$("#content").val(),
		              action:'mail2'

		                   },
		                   error:function(){
                    		 alert("警告：\n\n網路發生異常!!\n\n請檢查網路連線狀況！！");
			                  return;
		                   },
		                   success:function(data){
		                      alert(data);
					          return;
		                   }
	                    })
                        $(this).dialog("close");
                       },
                    "取消":function(){$(this).dialog("close");}
                }
    });



   });


})