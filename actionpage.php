<?php
/**
 * Created by PhpStorm.
 * User: kytis
 * Date: 9/2/2017
 * Time: 8:58 PM
 */

$username = "Ky";
$password = "GA";

if($_POST["user"] == $username && $_POST["pwd"] == $password) {
    echo "you are in";
}else{
    echo "busted, you un-wise hacker.";
}