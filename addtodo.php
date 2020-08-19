<?php session_start() ?>
<?php require 'functions.php' ?>
<?php
if ($_POST["title"]) {
    $title = $_POST["title"];
    $user = get_user_by_email($_SESSION['login']);
    add_todo($title, $user['id']);
}
redirect_to('main.php')
?>
