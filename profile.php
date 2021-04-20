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
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <a href="#">
                            <img width="50" height="50" src="img/logo.png" alt="Логотип"> </a>
                    </div>
                    <nav class="menu">
                        <div class="header__btn-menu">
                            <span class="icon-bars"></span>
                        </div>
                        <ul>
                            <li><a href="index.php">ГЛАВНАЯ</a></li>
                            <li><a href="index.php #services__title">CОСТАВ</a></li>
                            <li><a href="index.php #about">ПРЯМЫЕ ЛИНИИ</a></li>
                            <li><a href="index.php #form">ЗАПИСЬ НА ПРИЕМ</a></li>
                            <li><a href="index.php #organisation">ОРГАНИЗАЦИИ</a></li>
                            <li><a href="index.php #news">ВОПРОС/ОТВЕТ</a></li>
                            <li><a href="index.php #personal">ЛИЧНЫЙ КАБИНЕТ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Profile -->
       <section class="registr" id="registr">
        <div class="container">
           <form class="registr__form" action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <img class="profile__avatar" src="<?= $_SESSION['user']['avatar'] ?>"  alt="">
            <h2 class="profile__name"><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#" class="profile__email"><?= $_SESSION['user']['email'] ?></a>
            <a href="vendor/logout.php" class="logout">Выход</a>
       </form> 
        </div>   
    </section>
    <section id="form" class="form wow fadeInRight">
        <div class="container">
            <div class="form__inner">
                <div class="form__content">
                    <div class="form__title-box">
                        <div class="form__title">
                            ЗАПИСЬ НА ПРИЕМ
                        </div>
                        <div class="form__text">
                            Подача электронного обращения
                        </div>
                    </div>
                    <div class="form__box">
                        <form action="sandmail.php" method="POST">
                            <div class="form__box-inner">
                                <div class="form__box-left">
                                    <label>
                                        E-mail
                                        <input type="email" name="email" placeholder="Введите E-mail" maxlength="50" required>
                                    </label>
                                    <label>
                                        Контактный телефон
                                        <input type="text" name="user_phone" required placeholder="Введите телефон">
                                    </label>
                                    <label>
                                        ФИО
                                        <input type="text" name="user_name" required placeholder="Введите ФИО">
                                    </label>
                                    <label>
                                        Тема вопроса
                                        <select name="subject">
                                            <option selected>Запись на прием</option>
                                            <option value="1">Обращения
                                                по вопросам
                                                доступности
                                                медицинских услуг</option>
                                            <option value="2">Обращения
                                                и жалобы
                                                по вопросам
                                                качества услуг</option>
                                            <option value="3">Обращения по вопросам расизма в системе здравоохранения</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form__box-right">
                                    <label>
                                        Сообщение
                                        <textarea name="messagetext" required maxlength="150" placeholder="Введите сообщение"></textarea>
                                    </label>
                                    <button id="form__bottom-btn" class="default-btn" type="submit">Отправить обращение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <div class="footer__title">
                            О ГЛАВНОМ УПРАВЛЕНИИ ЗДРАВООХРАНЕНИЯ
                        </div>
                        <div class="footer__text">
                            УНП: 400067453 <br>
                            График работы: 8:30-13:00, 14:00-17:30
                        </div>
                        <a class="header__btn" href="#form">Запись на прием по Email</a>
                        <ul class="footer__list">
                            <li><a class="footer__phone" href="tel:503203">Телефон приемной: 50-32-03</a></li>
                            <li><a href="#">Почтовый адрес: 246050</a></li>
                            <li><a class="footer__adress" href="#">г.Гомель, пер. Спартака, 2а</a></li>
                        </ul>
                    </div>
                    <div class="footer__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.161786716614!2d31.008975315803784!3d52.42186617979566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d4684e188ea84f%3A0x4ee8ee8b8ee128a!2z0YPQuy4g0KHQv9Cw0YDRgtCw0LrQsCAyLCDQk9C-0LzQtdC70Yw!5e0!3m2!1sru!2sby!4v1612463050475!5m2!1sru!2sby" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    © 2021 Template by Rodion Masterskoi. Все права защищены.
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--для попап-->
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script> <!-- slider -->
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/main.js"></script>
    <script>
window.replainSettings = { id: '5dd120c2-5034-44cf-a36f-a1d0a4b4b714' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
    </body>
</html>