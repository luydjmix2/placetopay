/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * carlka la lista de los bancos al select
 */

$(document).ready(function (e) {
    var dataTem = [];
    $.ajax({
        url: '../../core/ajaxBancos.php',
        type: 'POST',
        dataType: 'json',
        data: {"consulta": "1"},
        success: function (data) {
            var obj = JSON.stringify(data);
            //$("#respuestaXml").html(obj);
            var objt = JSON.parse(obj);
            var objto = JSON.stringify(objt.listarBancos);
            var res = objto.replace(/{/gi, "");
            var res2 = res.replace(/}/gi, "");
            var res3 = res2.replace("]", '}');
            var res4 = res3.replace("[", '{');
            var ob = JSON.parse(res4);
            $("#listaBancos").append('<option value="" ></option>');
            $.each(ob, function (key, val) {
                $("#listaBancos").append('<option value="' + key + '" >' + val + '</option>');
            });

            //alert(objt.estado);
            //$("#respuestaXml").html(ob);
        }, error: function (jqXHR, textStatus, errorThrown) {
            //alert('error');

            $(".selectRequiredMsg").html('No se pudo cargar la lista recarge la pagina o intende de nuevo mastarde');
        }
    });
    
    
});



