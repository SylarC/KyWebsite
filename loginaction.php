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

$EkielvilleUsername = "Ekiel";
$EkielvillePassword = "Ville";

if($_POST["user"] == $KyUsername && $_POST["pwd"] == $KyPassword) {
    header('Location: KySecret.php');
}
elseif($_POST["user"] == $PastaUsername && $_POST["pwd"] == $PastaPassword){
    header('Location: Tsubey.html');
}
elseif($_POST["user"] == $EkielvilleUsername && $_POST["pwd"] == $EkielvillePassword){
    header('Location: Ekielville/index.html')
}

