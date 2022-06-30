<?php
session_start();
 if (!$_SESSION['user']) {
    header('Location:/ ');
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>moshchno.ru</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylee.css">
  </head>
   </script>
	<!-- главный блок -->
<div class="deal-wheel">
  <!-- блок с призами -->
  <ul class="spinner"></ul>
  <!-- язычок барабана -->
  <div class="ticker"></div>
  <!-- кнопка -->
  <button class="btn-spin" >START</button> 



</div>
  <!-- подключаем скрипт -->
  <script  src="script.js"></script>

  <body>
    <div class="site-mobile-menu">
    </div>
   <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-11 col-xl-2">
		<br>
          <h1 class="mb-0"><a class="text-white h2 mb-0">B<span class="text-primary">OT </span> </a></h1> 
           
		   <li class="text-primary" ><span><?= $_SESSION['user']['login'] ?></li>
		   <br>
		   <li class="cta"><a href="vendor/logout.php" >выход</a></li> 
						
		  </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
               <li class="cta"><a href="">moshchno.ru</a></li>
    <link rel="stylesheet" href="telegram-chat/telega-chat.css">
    <script src="telegram-chat/axios.min.js"></script>
    <script src="telegram-chat/telega-chat.js"></script>

    <script>

        document.querySelector('h1').addEventListener('click',e=>{

            console.log('триггер');

            new TelegaChat().open()

        })

    </script>
             </ul>
           </nav>
        </div>
     </div>
    </header>
  </body>
</html>