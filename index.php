<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Stronka</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <h3 class="mb-5">Ciekawe strony</h3>
    <div class="d-flex flex-wrap">
   <?php
   for($i = 0; $i<5; $i++):
    ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Tekst</h4>
        </div>
        <div class="card-body">
            <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
          
                <li>dsvsdv</li>
                <li>2dsv</li>
                <li>Emdsvpport</li>
                <li>Helpdvaccess</li>
                
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Więcej</button>
        </div>
    </div>
    <?php endfor; ?>
    </div>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>