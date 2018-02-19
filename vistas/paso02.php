
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Banco</title>
        <?php require('./core/hookExternalHead.php'); ?>
    </head>
    <body>

        <div class="container">

            <div class="row" style="margin-top:20px">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="post" id="bancosList">
                        <fieldset>
                            <h2>Please Sign In</h2>
                            <hr class="colorgraph">
                                <div class="form-group has-success">
                                    <label for="tipAcount"><strong>Selecione el tipo de cuanta con la cual realizara el pago</strong></label>
                                    <br>
                                    <select name="tipAcount" required>
                                        <option></option>
                                        <option value="per">Persona</option>
                                        <option value="emp">Empresa</option>
                                    </select>
                                    <span id="error" class="help-block"></span>
                                </div>
                                <div class="form-group has-error">
                                    <span id="selectBancos">
                                        <label for="listaBancos"><strong>Selecione de la lista la entidad finenciara con la que desea realizar el pago</strong></label>
                                        <select name="listaBancos" id="listaBancos" required>
                                          
                                        </select>
                                        <span id="error" class="help-block"></span>
                                        <span class="selectRequiredMsg">Seleccione un elemento.</span></span>
                                </div>

                                <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Continuar">
                                        </div>

                                    </div>
                                    </fieldset>
                                    </form>
                    <span id="respuestaXml"></span>
                                    </div>
                                    </div>

                                    </div>
                                    <?php require('./core/hookExternalfoot.php'); ?>
                                    <script src="../inclides/js/ajaxBancos.js"></script>
                                    </body>
</html>