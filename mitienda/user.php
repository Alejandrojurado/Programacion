<?php
session_start();
setlocale(LC_MONETARY, "es_ES");
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
    </head>
    <body>
        <h2>Datos del comprador</h2>
        <div class="col-md-8">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="payment.php">
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="5" placeholder="Dirección" name="direccion" required ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <input type="number" class="form-control" min="9" placeholder="Numero de contacto" name="numeroContacto" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="Email" name="email" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <input class="btn btn-primary" type="submit" name="pagar" value="pagar"/>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

