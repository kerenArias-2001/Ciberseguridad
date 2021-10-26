function enviartexto()
{
    /* enviar texto acuerdo de confidencialidad */
    var texto=document.getElementById("cod_i").value;
    document.getElementById("tex1").value=texto;

    var texto=document.getElementById("name_e").value;
    document.getElementById("tex2").value=texto;

    var texto=document.getElementById("nit_e").value;
    document.getElementById("tex3").value=texto;

    var texto=document.getElementById("repr_l").value;
    document.getElementById("tex4").value=texto;

    var texto=document.getElementById("num_i").value;
    document.getElementById("tex5").value=texto;

    var texto=document.getElementById("num_c").value;
    document.getElementById("tex6").value=texto;

    var texto=document.getElementById("num_c2").value;
    document.getElementById("tex7").value=texto;

}

/* enviar texto crear incidente */
function enviartexto2()
{
    var inc=document.getElementById("version_i").value;
    document.getElementById("inc_1").value=inc;

    var inc=document.getElementById("fecha_r").value;
    document.getElementById("inc_2").value=inc;

    var inc=document.getElementById("resp_i").value;
    document.getElementById("inc_3").value=inc;

    var inc=document.getElementById("fecha_hora").value;
    document.getElementById("inc_4").value=inc;

    var inc=document.getElementById("rep_i").value;
    document.getElementById("inc_5").value=inc;

    var inc=document.getElementById("cargo_i").value;
    document.getElementById("inc_6").value=inc;

    
    var inc=document.getElementById("dep_i").value;
    document.getElementById("inc_7").value=inc;

    var inc=document.getElementById("sede_i").value;
    document.getElementById("inc_8").value=inc;

    var inc=document.getElementById("mail_i").value;
    document.getElementById("inc_9").value=inc;

    var inc=document.getElementById("fech_hora").value;
    document.getElementById("inc_10").value=inc;

    var inc=document.getElementById("lugar_i").value;
    document.getElementById("inc_11").value=inc;

    var inc=document.getElementById("solicitud_i").value;
    document.getElementById("inc_12").value=inc;

    var inc=document.getElementById("descrip_i").value;
    document.getElementById("inc_13").value=inc;

    var inc=document.getElementById("recurso_i").value;
    document.getElementById("inc_14").value=inc;

    var inc=document.getElementById("ubic_i").value;
    document.getElementById("inc_15").value=inc;

    var inc=document.getElementById("info_i").value;
    document.getElementById("inc_16").value=inc;

    var inc=document.getElementById("copia_i").value;
    document.getElementById("inc_17").value=inc;


}


    
    
    $(document).ready(function () {
        $('#mensaje_error').hide();  
    });
    
    var cambioDePass = function() {
            var cont = $('#psw1').val();
        var cont2 = $('#psw1-repeat').val();
        if (cont == cont2) {
            $('#mensaje_error').hide();
            $('#mensaje_error').attr("class", "control-label col-md-12 text-success");
            $('#mensaje_error').show();
            $('#mensaje_error').html("Las constraseñas si coinciden");
            $(':input[type="submit"]').prop('disabled', false);
        } else {
             $('#mensaje_error').html("Las constraseñas no coinciden");
             $(':input[type="submit"]').prop('disabled', true);
            $('#mensaje_error').show();
        }
    }
    
    $("#psw1").on('keyup', cambioDePass);
    $("#psw1-repeat").on('keyup', cambioDePass);
       



