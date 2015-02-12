
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
		    "sSearch":       "全部欄位搜尋:",
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
                "sScrollY":"380px", //設定成拉頁y
               // "sScrollX":"400px", //設定成拉頁x

  


	    };

      $("#table_s").dataTable(opt);




     });

$(document).ready(function(){//多搜尋列表
    $('#table_s').dataTable().columnFilter({

    	sPlaceHolder: "head:after",

			aoColumns: [
						{ type: "text" },
					    { type: "select", values: [ '學生論文', '研討會論文', '專書', '期刊論文']  },
						{ type: "text" },
						{ type: "number-range" },
						{ type: "text" },
						null,
		     			]

		});


   });
 /*
$('#table_s').dataTable().columnFilter({aoColumns:[
				{ sSelector: "#A", type:"select"  },
				{ sSelector: "#B",type: "select", values: [ '學生論文', '研討會論文', '專書', '期刊論文']},
				{ sSelector: "#C" },
				{ sSelector: "#D", type:"number-range" },
				{ sSelector: "#E" }
				]}
			);*/

});


