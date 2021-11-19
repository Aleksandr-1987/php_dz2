<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Контактная форма</title>

</head>
<body>
<?php require "blocks/header.php"?>

<div class="container mt-5">
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите Ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
</div>

<?php require "blocks/footer.php"?>

</body>
</html>
