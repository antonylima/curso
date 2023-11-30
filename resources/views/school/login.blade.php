<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Home</title>
</head>
<body>
    <div class="container nav text-center justify-content-center" >
        <form class="form-control nav-item bg-dark" action="" id="divlog" method="POST">
            <div class="m-2 login">
                <input type="text" id="nome" placeholder="user">
            </div>
            <div class="login m-2">
            <input type="text" id="senha" placeholder="password">
            </div>
            <input class="m-2 btn btn-success" type="submit" name="submit" value="login">
        </form>
    </div>
    

    <script src="js/myscript.js"></script>
</body>
</html>