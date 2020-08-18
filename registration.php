<?php
session_start();
require 'functions.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Подключаемся к базе
    //Проверяем пользователя в базе
    $user = get_user_by_email($email);

    if (!empty($user)) {
        set_flash_message('danger', '<strong class="font__weight-semibold">Ошибка!</strong> Данный email уже зарегистрирован!.');
        redirect_to('register.php');
        exit();
    }
    add_user($email, $password);
    set_flash_message('success', '<strong class="font__weight-semibold">Поздравляю!</strong> Вы успешно зарегистрировались.');
}
redirect_to('login.php');
