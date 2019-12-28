<?php
/**
 * Created by PhpStorm.
 * User: kytis
 * Date: 9/2/2017
 * Time: 8:58 PM
 */

$KyUsr = "Ky";
$KyPwd = "0103";

$DownloadUsr = "admin";
$DownloadPwd = "download";

    if($_POST["user"] == $KyUsr && $_POST["pwd"] == $KyPwd) {
        header('Location: KyWhiteHat.php');
    }
    elseif($_POST["user"] == $DownloadUsr && $_POST["pwd"] == $DownloadPwd){
        header('Location: download.html');
    }
    else{
        header('Location loginerror.html');
    }
?>