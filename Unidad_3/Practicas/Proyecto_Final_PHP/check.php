<?php

session_start();
$valorsesion = $_SESSION['valoraleatorio'];

if($valorsesion == $_POST['captcha']){
    mail("marinapelmon@gmail.com", "2FA", "comprovación de usuario");
    echo "Todo bien"."<br>";
    echo ($_POST['nombre'])."<br>";
    echo sha1($_POST['contraseña'])."<br>";
    echo $valorsesion;

}else{
    echo "Captcha incorrecto";
}

?>