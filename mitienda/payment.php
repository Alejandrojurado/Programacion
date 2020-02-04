<?php
session_start();
include ("config.inc.php");

if (!empty($_POST["pagar"])) {
    $member_id = 1000;
    $firstName = $_POST ['nombre'];
    $lastName = $_POST ['apellido'];
    $address = $_POST ['direccion'];
    $contactNumber = $_POST ['numeroContacto'];
    $emailAddress = $_POST ['email'];
    $insertOrderSQL = "INSERT INTO shop_order(member_id, name, address, mobile, email, order_status, order_at, payment_type)VALUES('" . $member_id . "', '" . $firstName . " " . $lastName . "', '" . $address . "', '" . $contactNumber . "', '" . $emailAddress . "', 'PENDING', '" . date("Y-m-d H:i:s") . "', 'PAYPAL')";
    echo $insertOrderSQL;
    mysqli_query($mysqli_conn, $insertOrderSQL) or die("database error:" . mysqli_error($mysqli_conn));
    $order_id = mysqli_insert_id($mysqli_conn);

    $_SESSION["orderId"] = $order_id;
    $_SESSION["orderNumber"] = "45300996_" . $order_id;
}


if ($order_id) {
    if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
        foreach ($_SESSION["products"] as $product) {
            $insertOrderItem = "INSERT INTO shop_order_item(order_id, product_id, item_price, quantity)VALUES('" . $order_id . "', '" . $product["product_code"] . "', '" . $product["product_price"] . "', '" . $product["product_qty"] . "')";
            mysqli_query($mysqli_conn, $insertOrderItem) or die("database error:" . mysqli_error($mysqli_conn));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
    </head>
    <body>
        <form class="form-horizontal" action="http://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
            <input type='hidden' name='business' value='AlejandroJurado@business.example.com'>
            <input type='hidden' name='item_name' value='<?php echo $_SESSION["cartItems"]; ?>'>
            <input type='hidden' name='item_number' value="<?php echo $order_id; ?>">
            <input type='hidden' name='amount' value='<?php echo $_SESSION["payableAmount"]; ?>'>
            <input type='hidden' name='currency_code' value='ES'>
            <input type='hidden' name='notify_url' value='http://yourdomain.com/shopping-cart-with-paypal-integration/notify.php'>
            <input type='hidden' name='return' value='http://yourdomain.com/shopping-cart-with-paypal-integration/success.php'>
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="order" value="<?php echo $_SESSION["orderNumber"]; ?>">
            <br>
            <div class="form-group">
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pagar ahora">
                </div>
            </div>
        </form>
    </body>
</html>