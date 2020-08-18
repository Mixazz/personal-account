<?php session_start() ?>
<?php require 'functions.php' ?>
<?php
$title = $_POST["title"];

$user = get_user_by_email('mixaz@bk.ru');

add_todo($title, $user['id']);
redirect_to('main.php')
?>
