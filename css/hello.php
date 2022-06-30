<?php
session_start();
 if (!$_SESSION['user']) {
    header('Location:/ ');
}
?>

<!doctype html>
<html lang="en">
<head> 
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Moshchno код 2022</title>
</head>

<body>
    <div class="back1">

    </div>
    <div class="back2">
        
    </div>
   <img class="icon" src="icon.png">

   <div class="exit"><a href="vendor/logout.php" >2022</a></div> 

   <div class="money">цена 0 р</div>
   
   <div class="login"><span><?= $_SESSION['user']['login'] ?></div>

   <img class="wheel" src="wheel.png">

</body>
</html>

