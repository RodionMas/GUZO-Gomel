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
        <section class="rubric">
            <div class="container">
                <div class="news__text">
                    <div class="news__text-column">
                       <div class="news__images">
                        <img src="img/news-1.jpg" alt="" width="260">
                        <div class="news__date">24.01</div>
                    </div>
                    <div class="news__blog-title">
                        Как записаться к врачу?
                    </div>
                    <div class="news__blog-text news__blog-text1" >
                        Записаться на прием к врачу общей практики, врачу узкой специальности и помощнику врача пациенты могут по телефону регистратуры организации здравоохранения, при личном обращении в регистратуру, посредством сети Интернет на сайте организации здравоохранения, а также на приеме у врача (при записи на повторный прием либо к другому врачу-специалисту).
                    </div> 
                    </div>
                    <div class="news__text-column">
                        <div class="news__images">
                        <img src="img/news-2.jpg" alt="" width="260">
                        <div class="news__date">24.01</div>
                    </div>
                    <div class="news__blog-title">
                        Как пройти диспансеризацию?
                    </div>
                    <div class="news__blog-text news__blog-text1">
                        Порядок проведения диспансерных мероприятий существенно не изменился. Каждый гражданин имеет возможность обратиться в кабинет доврачебного приема либо на прием к помощнику врача общей практики, где и получит направления на обследования и маршрут проведения диспансеризации (с указанием номера кабинета и режима работы) в соответствии с группой диспансерного учета. Также в течение года медицинские работники организаций здравоохранения приглашают пациентов на диспансерные осмотры (в том числе, оставляя приглашение на обследования в почтовом ящике по месту жительства). При условии наличия данного направления пациент может напрямую обратиться в поликлинику, минуя доврачебный кабинет, помощника врача.
                    </div>
                    </div>
                    <div class="news__text-column">
                        <div class="news__images">
                        <img src="img/news-3.jpg" alt="" width="260" height="176px">
                        <div class="news__date">24.01</div>
                    </div>
                    <div class="news__blog-title">
                        Что такое дневной стационар?
                    </div>
                    <div class="news__blog-text news__blog-text1">
                        Дневной стационар (отделение дневного пребывания) - это отделение в поликлинике, в условиях которого пациент имеет возможность пройти курс лечения путем парентерального введения лекарственных препаратов (внутривенного, внутримышечного) в часы работы поликлиники. То есть отделение дневного пребывания является поликлиническим аналогом лечения пациента в стационаре (существенной разницей является лишь круглосуточное пребывание на койке и организация питания в последнем случае). Также в ходе проведения курса лечения в отделении дневного пребывания врач корректирует схему приема таблетированных лекарственных препаратов и назначает необходимые дообследования (в случае необходимости).
                    </div>
                    </div>
                </div>
            </div>
        </section>
          </section>
          <footer class="footer bot">
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
    </body>
</html>