<?php
session_start();
require 'functions.php';
$id = $_GET['id'];
include('conectBD.php');
$sql = "DELETE FROM `todos` WHERE `todos`.`id` = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

redirect_to('main.php');
