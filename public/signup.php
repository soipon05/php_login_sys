<?php
// 新規登録

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();

// echo "login screen";
// exit;


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="container">
        <form action="" method="post" id="signup">
            <p><input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>"></p>
            <p class="err"><?= h($app->getErrors('email')); ?></p>
            <p><input type="password" name="password" placeholder="password"></p>
            <p class="err"><?= h($app->getErrors('password')); ?></p>

            <div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div>
            <p><a class="fs12" href="/login.php">Log In</a></p>
            <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
        </form>
    </div>
</body>

</html>