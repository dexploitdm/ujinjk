function initHeader(){
    //header
    $(window).scroll(function() {
        const height = $(window).scrollTop();
        const header = $('header');
        if(height > 50){
            header.addClass('header-bg');
        } else{
            header.removeClass('header-bg');
        }
    });
}

function openMobileMenu() {
    const btnMenu = $('.js-open-menu'),
        header = $('header');
    btnMenu.bind("click", function() {
        header.hasClass('active') ? header.removeClass('active') : header.addClass('active')
    });
}

var mySwiper = undefined;
function initSolutions() {
    var screenWidth = $(window).width();
    if(screenWidth < 992 && mySwiper == undefined) {
        mySwiper = new Swiper('.swiper-container2', {
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else if (screenWidth > 991 && mySwiper != undefined) {
        mySwiper.destroy();
        mySwiper = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}
//Services
var mySwiperServices = undefined;
function initServices() {
    var screenWidth = $(window).width();
    if(screenWidth < 992 && mySwiperServices == undefined) {
        mySwiperServices = new Swiper('.swiper-container3', {
            pagination: {
                // el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else if (screenWidth > 991 && mySwiperServices != undefined) {
        mySwiperServices.destroy();
        mySwiperServices = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}

function scrollFunny() {
    var linkNav = document.querySelectorAll('[href^="#"]'), //выбираем все ссылки к якорю на странице
        V = 0.2;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
    for (var i = 0; i < linkNav.length; i++) {
        linkNav[i].addEventListener('click', function(e) { //по клику на ссылку
            e.preventDefault(); //отменяем стандартное поведение
            var w = window.pageYOffset,  // производим прокрутка прокрутка
                hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
            t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
                start = null;
            requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
            function step(time) {
                if (start === null) start = time;
                var progress = time - start,
                    r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
                window.scrollTo(0,r);
                if (r != w + t) {
                    requestAnimationFrame(step)
                } else {
                    location.hash = hash  // URL с хэшем
                }
            }
        }, false);
    }
}

function openModals(){
    const modalDemo = $('.js-demo-down'),
        modalVideo = $('.js-demo-video');
    modalDemo.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    modalVideo.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
}

$(window).on('resize', function(){
    initSolutions();
    initServices();
});


$( document ).ready(function() {
    initHeader();
    //initCardImages();
    openMobileMenu();
    initSolutions();
    initServices();
    scrollFunny();
    openModals();
});