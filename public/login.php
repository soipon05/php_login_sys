<?php

require_once(__DIR__ . '/../config/config.php');


// echo "login screen";
// exit;


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="container">
        <form action="" method="post">
            <p><input type="text" name="email" placeholder="email"></p>
            <p><input type="password" name="password" placeholder="password"></p>

            <div class="btn">Log In</div>
            <p><a class="fs12" href="/signup.php">Sign Up</a></p>
        </form>
    </div>
</body>

</html>