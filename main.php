<?php session_start() ?>
<?php require 'functions.php' ?>
<?php
if (empty($_SESSION['login'])) {
    redirect_to('login.php');
    exit;
}
$user = get_user_by_email($_SESSION['login']);
$todos = display_todos($user['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="css/assets/bootstrap.css">
    <title>Личная страница</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h5 class="frame-heading">
                    Список задач
                </h5>
            </div>
            <div class="col-3">Ваш логин: <?= $user['email'] ?>
            </div>
        </div>

        <div class="frame-wrap">
            <div class="frame-wrap"></div>
            <form action="addtodo.php" method="POST" class="row align-items-center">
                <div class="col-10"><input type="text" name="title" id="simpleinput" class="form-control" placeholder="Добавить задачу"></div>
                <div class="col-2"><button class="btn btn-success m-2" name="submit">Добавить</button></div>
        </div>

        </form>

        <? foreach($todos as $todo): ?>
        <div class="">
            <div class="row bg-light rounded border border-primary p-3 m-1 align-items-center">
                <div class="col-8">
                    <?= $todo['title'] ?>
                </div>
                <div class="col-4"><a href="show.php?id=<?php echo $todo['id'] ?>" class="btn btn-info">Редактировать</a>
                    <a href="edit.php?id=<?php echo $todo['id'] ?>" class="btn btn-warning">Изменить</a>
                    <a href="delete.php?id=<?php echo $todo['id'] ?>" class="btn btn-danger">Удалить</a></div>
            </div>
        </div>
        <?endforeach;?>
        </tbody>
        </table>
    </div>
    </div>
</body>

</html>