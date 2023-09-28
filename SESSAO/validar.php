<?php
session_start();

if(!isset($_SESSION['token'])){
    header('location:http://localhost/SESSAO/erro_login.php');
    exit;
}
?>