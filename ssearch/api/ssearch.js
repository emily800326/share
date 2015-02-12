$(function(){
  var w = $("#mwt_slider_content").width();
  $('#mwt_slider_content').css('height', ($(window).height() - 20) + 'px' ); 
  
  $("#mwt_fb_tab").mouseover(function(){
    if ($("#mwt_mwt_slider_scroll").css('left') == '-'+w+'px')
    {
      $("#mwt_mwt_slider_scroll").animate({ left:'0px' }, 600 ,'swing');
    }
  });
  
  
  $("#mwt_slider_content").mouseleave(function(){
    $("#mwt_mwt_slider_scroll").animate( { left:'-'+w+'px' }, 600 ,'swing');  
  }); 
});


function filterGlobal () {
  $('#table').DataTable().search( 
    $('#global_filter').val()

  ).draw();
}

function filterColumn ( i ) {
  $('#table').DataTable().column( i ).search( 
    $('#col'+i+'_filter').val()
  ).draw();

}

$.fn.dataTable.ext.search.push(
	function( settings, data, dataIndex ) {
		var min = parseInt( $('#min').val(), 10 );
		var max = parseInt( $('#max').val(), 10 );
		var year = parseFloat( data[3] ) || 0; // use data for the age column

		if ( ( isNaN( min ) && isNaN( max ) ) ||
			 ( isNaN( min ) && year <= max ) ||
			 ( min <= year   && isNaN( max ) ) ||
			 ( min <= year   && year <= max ) )
		{
			return true;
		}
		return false;
	}
);



$(document).ready(function() {
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
                "sScrollY":"450px", //設定成拉頁y
               // "sScrollX":"400px", //設定成拉頁x
	    };
  

  $('#table').dataTable(opt);
  $('input.global_filter').on( 'keyup click', function () {
    filterGlobal();
  } );
  $('input.column_filter').on( 'keyup click', function () {
    filterColumn( $(this).parents('tr').attr('data-column') );
  } );

  
  

} );


$(document).ready(function() {
	var table = $('#table').DataTable();
	// Event listener to the two range filtering inputs to redraw on input
	$('#min, #max').keyup( function() {
		table.draw();
	} );
} );
