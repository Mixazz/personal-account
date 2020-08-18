<?php

function get_user_by_email($email)
{
    include('conectBD.php');
    $stmt = $pdo->prepare("SELECT * FROM persons WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $person = $stmt->fetch(PDO::FETCH_ASSOC);
    return $person;
}
function add_user($email, $password)
{
    include('conectBD.php');
    $stmt = $pdo->prepare('INSERT INTO `persons`(email, password) VALUES (:email, :password)');
    $stmt->execute(
        [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]
    );
    return $pdo->lastInsertId();
}

function add_todo($title, $userID, $description = NULL)
{
    include('conectBD.php');
    $sql = "INSERT INTO `todos` (title, description, id_p) VALUES (:title, :description, :id_p)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        [
            'title' => $title,
            'description' => $description,
            'id_p' => $userID
        ]
    );
    return $pdo->lastInsertId();
}

function display_todos($userID)
{
    include('conectBD.php');
    $sql = "SELECT * FROM todos WHERE id_p = :id_p";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_p' => $userID]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function set_flash_message($name, $message)
{
    // name - ключ, message - значение, текст сообщения
    // Подготавливает флеш сообщение
    // Возврящает null
    $_SESSION[$name] = $message;
};

function display_flash_message($name)
{
    // name - ключ
    // Выводит флеш сообщение
    // Возвращает null
    if (isset($_SESSION[$name])) {
        echo "<div class=\"alert fade alert-simple alert-{$name} alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light\" role=\"alert\" data-brk-library=\"component__alert\"><button type=\"button\" class=\"close font__size-18\" data-dismiss=\"alert\"><span aria-hidden=\"true\"><i class=\"fal fa-times\"></i></span><span class=\"sr-only\">Close</span></button><i class=\"start-icon far fa-check-circle\"></i>{$_SESSION[$name]}</div>";
        unset($_SESSION[$name]);
    }
}

function redirect_to($path)
{
    // Получает путь
    // Перенаправляет на другую страницу
    header('Location: ' . $path);
}

function login($email, $password)
{
    $user = get_user_by_email($email);

    if (!empty($user)) {
        if (password_verify($password, $user['password'])) {
            set_flash_message('success', 'Добро пожаловать, вы авторизировались!');
            $_SESSION['login'] = $email;
            return true;
        }
    }
    set_flash_message('danger', 'Неверный логин или пароль');
    return false;
};
