<?php session_start() ?>
<?php require 'functions.php' ?>
<?php
$user = get_user_by_email('mixaz@bk.ru');
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
        <h5 class="frame-heading">
            Список задач
        </h5>
        <div class="frame-wrap">
            <form action="addtodo.php" method="POST">
                <input type="text" name="title" id="simpleinput" class="form-control" placeholder="Добавить задачу">
                <button class="btn btn-success mt-3" name="submit">Добавить</button>
            </form>
            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Изменить</th>
                    </tr>
                </thead>
                <tbody>
                    <?$i = 0;
                    foreach($todos as $todo): ?>
                    <tr>
                        <th scope="row"><?= ++$i ?></th>
                        <td><?= $todo['title'] ?></td>
                        <td>
                            <a href="show.php?id=<?php echo $todo['id'] ?>" class="btn btn-info">Редактировать</a>
                            <a href="edit.php?id=<?php echo $todo['id'] ?>" class="btn btn-warning">Изменить</a>
                            <a href="delete.php?id=<?php echo $todo['id'] ?>" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>