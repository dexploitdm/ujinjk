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

function productSlider(){
    mySwiperProduct = new Swiper('.swiper-container6', {
        slidesPerView: 1,
        spaceBetween: 100,
        slideToClickedSlide: false,
        //loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            968: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }
    });
    mySwiperProduct7 = new Swiper('.swiper-container7', {
        slidesPerView: 1,
        spaceBetween: 100,
        slideToClickedSlide: false,
        //loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            968: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }
    });
}
function initProjects() {
    mySwiperProjects = new Swiper('.swiper-container-pr', {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        //loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


$(window).on('resize', function(){
    //initSolutions();
});


$( document ).ready(function() {
    initHeader();
    //initCardImages();
    openMobileMenu();
    //initServices();
    scrollFunny();
    openModals();
    productSlider();
    initProjects();
});