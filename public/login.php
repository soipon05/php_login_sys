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
        <form action="" method="post" id="login">
            <p><input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>"></p>
            <p><input type="password" name="password" placeholder="password"></p>

            <p class="err"><?= h($app->getErrors('login')); ?></p>
            <div class="btn" onclick="document.getElementById('login').submit();">Log In</div>
            <p><a class="fs12" href="/signup.php">Sign Up</a></p>
            <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
        </form>
    </div>
</body>

</html>