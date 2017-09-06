<?php
/**
 * Created by PhpStorm.
 * User: kytis
 * Date: 9/2/2017
 * Time: 8:58 PM
 */

$KyUsername = "Ky";
$KyPassword = "GA";

$PastaUsername = "Tsubey";
$PastaPassword = "Pasta";

if($_POST["user"] == $KyUsername && $_POST["pwd"] == $KyPassword) {
    echo "Login Successful ";
}
elseif($_POST["user"] == $PastaUsername && $_POST["pwd"] == $PastaPassword){
    header('Location: Tsubey.html');
}


