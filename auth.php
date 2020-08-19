<?php
session_start();
require 'functions.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $login = login($email, $password);
    if ($login) {
        redirect_to('main.php');
        exit;
    }
}
redirect_to('login.php');
