<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>


    </head>
    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">
                    <strong>CAPTCHA con PHP </strong><br>
                    Ingresar el texto mostrado en la imagen: <br>
                    <form action="registrado.php" method="post">
                        <img src="captcha.php" width="100" height="30" vspace="3"><br>
                        <input name="tmptxt" type="text" size="30"><br>
                        <input name="btget" type="submit" class="boton" value="Enviar">
                        <input name="action" type="hidden" value="checkdata">

                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
