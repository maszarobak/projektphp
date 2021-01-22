
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Autoryzacja</title>
</head>
<body>
    
<div class="container mt-4">
    <?php
        if($_COOKIE['user']==''):
    ?>
    <div class="row">
        <div class="col">
            <h1>Rejestracja</h1>
            <form action="process.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Proszę wpisać login">
            <input type="text" class="form-control" name="name" id="name" placeholder="Proszę wpisać imię">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Proszę wpisać hasło">
            <button class="btn btn-success" type="submit">Rejestrackja</button>
            </form>
        </div>
        <div class="col">
        <h1>Autoryzacja</h1>
            <form action="login.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Proszę wpisać login">
           
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Proszę wpisać hasło">
            <button class="btn btn-success" type="submit">Autoryzacja</button>
            </div>
    </div>
    <?php else:?>
    <p>Cześć <?=$_COOKIE['user']?>. Żeby się wylogować proszę nacisnąć <a href="exit.php">tutaj</a></p>
    <?php endif;?>
</div>
</body>
</html>
