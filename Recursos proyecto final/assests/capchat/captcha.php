<?php

    //Archivo captcha.
    function randomText($length) {
        $pattern = "123456789abcdefghijkmnpqrstuvwxyz";
        for($i=0;$i<$length;$i++) {
            $key .= $pattern{mt_rand(0,32)};
        }
        return $key;
    }
    session_start();
    $_SESSION['tmptxt'] = randomText(7);
    $captcha = imagecreatefromgif("bgcaptcha.gif");
    $colText = imagecolorallocate($captcha, 0, 0, 0);
    imagestring($captcha, 5, 16, 7, $_SESSION['tmptxt'], $colText);
    header("Content-type: image/gif");
    imagegif($captcha);
    imagedestroy($captcha);








 ?>
