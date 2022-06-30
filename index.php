<?php
session_start();

if ($_SESSION['user']) {
    header('Location: lol.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>moshchno.ru</title>
	<link rel='StyleSheet' href='login.css' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <script type="text/javascript">
      var onloadCallback = function () {
        grecaptcha.render('html_element', {
          sitekey: '6LdkRLAgAAAAAN74uxSNqCPX2D9QBAIrShbHAHOu',
        });
      };
    </script>
</head>
<body>
<div class="site-mobile-menu">
    </div>
   <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-11 col-xl-2">
          <h1 class="mb-0"><a class="text-white h2 mb-0"><span class="text-primary" onclick="authStatus()">Регистрация</span> </a></h1> 
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
               <li><a href="loli.php">Пользовательское соглашение</a></li>
               <li class="cta"><a href="">moshchno.ru</a></li>
    <link rel="stylesheet" href="telegram-cha/telega-chat.css">
    
             </ul>
           </nav>
        </div>
     </div>
    
    <div class="clr"></div>
    </div>

<div id="register_container">
	<div id="form_container">
		<p class="register-text">Регистрация</p>
		<form action="vendor/signup.php" method="post" >
            <input class="text_input" type="text" name="login" placeholder="Логин">
            <input class="text_input" type="password" name="password" placeholder="Пароль">
            <input class="text_input" type="password" name="password_confirm" placeholder="Подтвердите пароль">
            <div id="html_element"></div>
		    <div id='register'>
                <button type="submit"> [Зарегестрироваться]  </button>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </div>
		</form>
	</div>
</div>

<div id="login_container">
	<div id="form_container">
		<p class="login-text">Авторизация</p>
		<form action="vendor/signin.php" method="post" >
            <input class="text_input" type="text" name="login" placeholder="">
            <input class="text_input" type="password" name="password" placeholder="">
		    <div id='login'>
                <button type="submit"> [Войти]  </button>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </div>
		</form>
	</div>
</div>
<script
      src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
      async
      defer
    ></script>
<script src="auth.js"></script>
</body>
</html>
      
	  