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
  </head>
  <body>
    <div class="site-mobile-menu">
    </div>
   <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-11 col-xl-2">
          <h1 class="mb-0"><a class="text-white h2 mb-0"><span class="text-primary"> </span> </a></h1> 
          </div>
		  
          <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
               <li><a href="lol.php">Обратно</a></li>
               <li class="cta"><a href="">moshchno.ru</a></li>
                
             </ul>
           </nav>
        </div>
     </div>
    </header>
  </body>
</html>