/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * validar sesion y confimar el estado activo del usuario
 */
$(document).ready(function (e) {
    $("#formLogin").submit(function () {
        var name = $("#name").val();
        var pasd = $("#password").val();
        var data = {"username": name, "password": pasd};
        //alert(name);
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
                }else{
                    $("#mensaje").text('No se pudo iniciar sesion, por favor intente de nuevo y verifique sus credenciales');
                }


            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('error');
            }
        });//alert('Ok');
    });
});

function refresh()
{
    location.reload(true);
}