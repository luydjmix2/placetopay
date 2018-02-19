/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * realiza el proceso de almacenamiento de informacion del proceso hasta el paso 01  
 * con el amacenamiento de informcacion de la cuanta y caracteristicas de banco 
 * y valor a pagar
 */

$(document).ready(function (e) {
    $("#bancosList").submit(function () {

        //location.reload();

        $.ajax({
            url: '../../core/ajaxLogin.php',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (data) {
                var obj = JSON.stringify(data);
                var res = obj.replace(/:{"0":/gi, ":");
                var res2 = res.replace(/"}/gi, '"');
                var objt = JSON.parse(res2);
                //alert(objt.estado);
                //alert('Ok');
                if (objt.estado == true) {
                    $("#mensaje").text('Gracias por iniciar secion ' + objt.user + ', estamos cargando tu sesion.');
                    setInterval(refresh(), 12000);
                } else {
                    $("#mensaje").text('No se pudo iniciar sesion, por favor intente de nuevo y verifique sus credenciales');
                }


            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('error');
            }
        });
    });
});

