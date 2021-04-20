<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главное Управление Здравоохранения</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!--popap-->
    <link rel="stylesheet" href="css/slick.css"> <!-- slider -->
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
    <body>
        <!-- Form registr -->
       <section class="registr" id="registr">
        <div class="container">
           <form class="registr__form" action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <label>Изображение профиля</label>
           <input name="avatar" class="registr__form-inp" type="file">
           <label>ФИО</label>
           <input name="full_name" class="registr__form-inp" type="text" placeholder="Введите ФИО">
           <label>Логин</label>
           <input name="login" class="registr__form-inp" type="text" placeholder="Введите логин">
           <label>Пароль</label>
           <input name="password" class="registr__form-inp" type="password" placeholder="Введите пароль">
           <label>Подтвердите пароль</label>
           <input name="password_confirm" class="registr__form-inp" type="password" placeholder="Введите пароль еще раз">
           <label>Почта E-mail</label>
           <input name="email" class="registr__form-inp" type="email" placeholder="Введите почту">
           <button class="registr__btn" type="submit">Войти</button>
           <p class="registr__form-que">
            У вас уже есть аккаунт? - <a class="registr__form-link" href="/">авторизируйтесь</a>!
           </p>
            <?php 
            if ($_SESSION['message']) {
            	echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>' ;
            }
             unset($_SESSION['message']);

            ?>
       </form> 
        </div>   
    </section>
    </body>
</html>