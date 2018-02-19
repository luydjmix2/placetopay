<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>login</title>
        <?php require('./core/hookExternalHead.php'); ?>
    </head>
    <body>
        <div class="container">

            <div class="row" style="margin-top:20px">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" action="" id="formLogin">
                        <h2>Autenticar cuenta</h2>
                        <hr class="colorgraph">
                            <div >
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Usuario">
                            </div>
                            <div >
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
                            </div>
                            <hr class="colorgraph">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">

                                        <input type="submit" id="iniSesion" value="Iniciar sesion" class="btn btn-success"/>
                                    </div>
                                </div>
                                </form>
                                <span id="mensaje" class="help-block"></span>
                                </div>
                                </div>

                                </div>
                                <?php require('./core/hookExternalfoot.php'); ?>
                                <script src="../inclides/js/ajaxLogin.js"></script>
                                </body>
                                </html>