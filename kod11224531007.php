<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: hello.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moshchno код 14</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
</head>
<body>


    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Id-1</label>
        <input type="text" name="login" placeholder="">
        <label>Id-2</label>
        <input type="password" name="password" placeholder="">
        <label>Id-3</label>
        <input type="password" name="password_confirm" placeholder="">
        <button type="submit">Добавить чела на сайт</button>
        <p>
           <a href="/">index.php</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>