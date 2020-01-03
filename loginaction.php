<?php
session_start();
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
        $_SESSION['AdminLogin'] = 'ncji3857sdiv2l3v-sofj3jvnslifh20v3-fn3kvnu38f';
        $_SESSION['DownloadLogin'] = 'asdjkfj37y94848ghsldkvbowiehlskdnfb3kif';
        header('Location: ../adminaccess.php');
    }
    elseif($_POST["user"] == $DownloadUsr && $_POST["pwd"] == $DownloadPwd){
        $_SESSION['DownloadLogin'] = 'asdjkfj37y94848ghsldkvbowiehlskdnfb3kif';
        header('Location: download.php');
    }
    else{
        $_SESSION['AdminLogin'] = 'InvalidLoginPoser!';
        header('Location loginerror.html');
    }
?>