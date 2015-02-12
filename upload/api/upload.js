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


$('#tabs-1').hide();
$('#tabs-2').hide();
$('#tabs-3').hide();
$('#tabs-4').hide();

$('#button1').click(function() {
         $('#tabs-1').show();
         $('#tabs-2').hide();
         $('#tabs-3').hide();
         $('#tabs-4').hide();
});

$('#button2').click(function() {
         $('#tabs-1').hide();
         $('#tabs-2').show();
         $('#tabs-3').hide();
         $('#tabs-4').hide();
});

$('#button3').click(function() {
         $('#tabs-1').hide();
         $('#tabs-2').hide();
         $('#tabs-3').show();
         $('#tabs-4').hide();
  });
$('#button4').click(function() {
         $('#tabs-1').hide();
         $('#tabs-2').hide();
         $('#tabs-3').hide();
         $('#tabs-4').show();
  });













});