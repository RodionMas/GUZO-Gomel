$(function() {

    $('.slider__inner, .news__slider-inner').slick({
        nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        infinite: false
    }); //Подключаем слайдер
    //стилизация селектов
    $('select').styler();



    //3D карточки сотрудников
    const servicesitemss = document.querySelectorAll('.services__items');

    for (let i = 0; i < servicesitemss.length; i++) {
        const servicesitems = servicesitemss[i];
        servicesitems.addEventListener('mousemove', startRotate);
        servicesitems.addEventListener('mouseout', stopRotate);

    }

    function startRotate(event) {
        const servicesItem = this.querySelector('.services__item');
        const halfHeight = servicesItem.offsetHeight / 2;

        servicesItem.style.transform = 'rotateX(' + -(event.offsetY - halfHeight) / 10 + 'deg) rotateY(' + (event.offsetX - halfHeight) / 10 + 'deg)';
    }

    function stopRotate(event) {
        const servicesItem = this.querySelector('.services__item');

        servicesItem.style.transform = 'rotate(0)';
    }
    //прогресс бар
    const progress = document.querySelector('.progress');
    window.addEventListener('scroll', progressBar);

    function progressBar(e) {
        let windowScroll = document.body.scrollTop || document.documentElement.scrollTop
        let windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
        let per = windowScroll / windowHeight * 100;

        progress.style.width = per + '%';
    }
    //анимация якоря
    $('a[href^="#"]').click(function() {
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1300);
    });
    // spoiler
    $(function() {
        $('.spoiler-body').hide(300);
        $(document).on('click', '.spoiler-head', function(e) {
            e.preventDefault()
            $(this).parents('.spoiler-wrap').toggleClass("active").find('.spoiler-body').slideToggle();
        })
    })
    //бургер меню
    $('.header__btn-menu').on('click', function(){
    	$('.menu ul').slideToggle();
    })

});
