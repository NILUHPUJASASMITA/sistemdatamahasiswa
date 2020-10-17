<?php
session_start();
if (isset($_SESSION['login_in'])) {
    header("location:home.php");
}else {
    header("location:../index.php");
}
?>