//Управкление coockie
function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : ("; expires="+exdate.toUTCString()));
    document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name)
{
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0; i<ARRcookies.length; i++)
    {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name)
        {
            return unescape(y);
        }
    }
}
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
        linkDrawer = $('.link-drawer'),
        header = $('header');
    btnMenu.bind("click", function() {
        header.hasClass('active') ? header.removeClass('active') : header.addClass('active')
    });
    linkDrawer.bind("click", function() {
        header.hasClass('active') ? header.removeClass('active') : header.addClass('active')
    });
}

function activeLinkMenu(){
    if(getCookie('activeAnchor')){
        let oldLink = getCookie('activeAnchor');
        let newLink = window.location.href + '#' + oldLink
        if(!window.location.hash) {
            document.location.href = newLink;
        }
    }

    jQuery(window).scroll(function(){
        var $sections = $('.anchor');
        $sections.each(function(i,el){
            var top  = $(el).offset().top-100;
            var bottom = top +$(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if( scroll > top && scroll < bottom){
                $('a.active').removeClass('active');
                $('a[href="#'+id+'"]').addClass('active');
                setCookie('activeAnchor', id, '30')
            }
        })
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
        e1 = $('.e1'),
        e2 = $('.e2'),
        e3 = $('.e3'),
        e4 = $('.e4'),
        e5 = $('.e5'),
        jsInfoProject = $('.js-info-pro'),
        callManager = $('.js-form-manager'),
        quizModal = $('.js-start-quiz'),
        closeEl = $('.close-el'),
        orderCall = $('.js-order-call'),
        modalVideo = $('.js-demo-video');

    modalDemo.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    modalVideo.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    e1.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    e2.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    e3.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    e4.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    e5.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    jsInfoProject.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    callManager.magnificPopup({
        type:'inline',
        midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        callbacks: {
            close: function(){

                function positionQuiz() {
                    let elPosition = $('.quiz').position().top - 100;
                    document.body.scrollTop = elPosition;
                    document.documentElement.scrollTop = elPosition;
                }
                setTimeout(positionQuiz, 500);
            }
        }
    });
    quizModal.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    orderCall.magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });

    closeEl.click(function() {
        $.magnificPopup.close();
    });

}


function productSlider(){
    $('.product-one').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,

            },
            968:{
                items:3,
                nav: true
            },
        }
    });
    //Custom Carousel actions
    const prOneNext = $('.pr-one-next');
    const prOnePrev = $('.pr-one-prev');
    prOneNext.click(function() {
        let productCarOneNext = $('.product-one .owl-next');
        let productCarOnePrev = $('.product-one .owl-prev');
        productCarOneNext.click();

        if(productCarOneNext.hasClass('disabled')){
            prOneNext.addClass('disabled');
        }
        if(!productCarOnePrev.hasClass('disabled')){
            prOnePrev.removeClass('disabled');
        }
    });
    prOnePrev.click(function() {
        let productCarOnePrev = $('.product-one .owl-prev');
        let productCarOneNext = $('.product-one .owl-next');
        productCarOnePrev.click();

        if(productCarOnePrev.hasClass('disabled')){
            prOnePrev.addClass('disabled');
        }
        if(!productCarOneNext.hasClass('disabled')){
            prOneNext.removeClass('disabled');
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

function initAbouts() {
    mySwiperAbouts = new Swiper('.swiper-container-abouts', {
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
        },
        //loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


function initPartners() {
    mySwiperPartners = new Swiper('.swiper-container-partners', {
        slidesPerView: 2,
        //spaceBetween: 30,
        freeMode: true,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            968: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 7,
                //spaceBetween: 50,
            },
        }
    });
}

function initLogos() {
    mySwiperPartners = new Swiper('.swiper-container-logos', {
        slidesPerView: 2,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        //loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        }
    });
}

function validateContact () {

    const emailInput = $('.js-email'),
        nameInput = $('.js-name'),
        msgInput = $('.js-msg'),
        bntSubmit = $('.js-submit');

    const fio = $('.js-fio'),
        telephone = $('.js-telephone'),
        emailsend = $('.js-emailsend'),
        bntSubmitFormes = $('.js-submit-formes');

    function valid(){
        if(emailInput.val().length > 0 && nameInput.val().length > 0){
            bntSubmit.removeAttr('disabled');
        } else {
            if(emailInput.val().length === 0) {
                emailInput.addClass('error');
            } else {
                emailInput.removeClass('error');
            }
            if(nameInput.val().length > 0) {
                nameInput.removeClass('error');
            } else {
                nameInput.addClass('error');
            }
        }

    }
    function validOtherForm(){
        if($('.js-fio').val().length > 0 && $('.js-telephone').val().length > 0){
            bntSubmitFormes.removeAttr('disabled');
        } else {
            if($('.js-fio').val().length === 0) {
                console.log('fio' + fio)
                fio.addClass('error');
            } else {
                fio.removeClass('error');
            }
            if($('.js-telephone').val().length > 0) {
                telephone.removeClass('error');
            } else {
                telephone.addClass('error');
            }
        }
    }

    //Поля footer форм
    emailInput.focusout(function() {
        valid();
        if($('.js-email').val().length > 0) {
            emailInput.removeClass('error');
        }
    });
    nameInput.focusout(function() {
        valid();
        if(nameInput.val().length > 0) {
            nameInput.removeClass('error');
        }
        if(emailInput.val().length === 0) {
            emailInput.addClass('error');
        }
    });
    emailInput.on('input', function() {
        valid();
    });
    nameInput.on('input', function() {
        valid();
    });
    msgInput.on('input', function() {
        valid();
    });



    //Поля остальных форм
    fio.focusout(function() {
        validOtherForm();
        if($('.js-fio').val().length > 0) {
            fio.removeClass('error');
        }
    });
    telephone.focusout(function() {
        validOtherForm();
        if($('.js-telephone').val().length > 0) {
            telephone.removeClass('error');
        }
        if($('.js-fio').val().length === 0) {
            fio.addClass('error');
        }
    });
    fio.on('input', function() {
        validOtherForm();
    });
    telephone.on('input', function() {
        validOtherForm();
    });
    emailsend.on('input', function() {
        validOtherForm();
    });

}


$(window).on('resize', function(){
    //initSolutions();
});


$( document ).ready(function() {
    initHeader();
    //initCardImages();
    openMobileMenu();
    activeLinkMenu();
    //initServices();
    scrollFunny();
    openModals();
    productSlider();
    initProjects();
    initAbouts();
    initPartners();
    initLogos();
    validateContact();
});