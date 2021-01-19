<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Kontakt</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
<form class="" action="check.php" method="post">
    <input type="mail" name="mail" placeholder="Proszę podać mail" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Proszę wpisać wiadomość"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Wyślij</button>
</form>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>