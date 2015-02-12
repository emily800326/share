$(function() {


 $(function() {
    $( "#tabs" ).tabs();
  });


$(function() {
    $( "input[type=submit], button" )
      .button()
      .click(function(event) {
      });
  });

$(document).ready(function(){

    	var setLanguage={

		    "sProcessing":   "處理中...",
		    "sLengthMenu":   "顯示 _MENU_ 項結果",
		    "sZeroRecords":  "沒有符合結果",
		    "sInfo":         "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
		    "sInfoEmpty":    "顯示第 0 至 0 項結果，共 0 項",
		    "sInfoFiltered": "(從 _MAX_ 項結果過濾)",
		    "sInfoPostFix":  "",
		    "sSearch":       "搜尋:",
		    "sUrl":          "",
		    "oPaginate": {
		        "sFirst":    "首頁",
		        "sPrevious": "上頁",
		        "sNext":     "下頁",
		        "sLast":     "尾頁",
		    }
		};

		var opt;

		opt={
	           "oLanguage":setLanguage,
	           "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "全部"]],
	            "bPaginate":false,
                "sScrollY":"380px", //設定成拉頁


	    };

      $("#table_1").dataTable(opt);
      $("#table_2").dataTable(opt);
      $("#table_3").dataTable(opt);
      $("#table_4").dataTable(opt);

 	
     });


 });


function delCheck()
        {
            var flag=window.confirm("你確認要刪除嗎?");
            if(flag==true)
			{
			}
			else if(flag==false){
			window.event.returnValue=false;
			}

        }