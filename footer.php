<footer id="contact-anchor" class="anchor">
    <div class="breadcrumbs">
            <ul>
                <li><a href="#product-anchor">О продукте</a> </li>
                <li><a href="#project-anchor">Наши проекты</a> </li>
                <li><a href="#about-anchor">О нас</a> </li>
                <li><a class="active" href="#contact-anchor">Контакты</a> </li>
            </ul>
        </div>
    <div class="footer-layout box">
        <h2 class="title-h2">Контакты</h2>
        <div class="footer-layout-box" >
            <div class="footer-layout-box_item">
                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <span>Телефон</span>
                        <a class="footer-contact-item_link" href="tel:+8 800 775 05 19">8 800 775 05 19</a>
                    </div>
                    <div class="footer-contact-item">
                        <span>E-mail</span>
                        <a class="footer-contact-item_link" href="mailto:info@mysmartflat.ru">info@ujin.tech</a>
                    </div>
                    <div class="footer-contact-item">
                        <span>Адрес</span>
                        <a class="footer-contact-item_link" href="mailto:info@mysmartflat.ru">Пермь, Шоссе Космонавтов, 111, корп. 2</a>
                    </div>
                    <div class="footer-contact-item">
                        <div class="links-soc">
                            <a href="https://wa.me/79824897387" class="links-soc-w">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/whatsapp.png"> <p>Whatsapp</p>
                            </a>
                            <a href="tg://resolve?domain=panychelena" class="links-soc-t">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/telegram.png"> <p>Telegram</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-layout-box_item">
                <div class="footer-form">
                    <div class="footer-form-layout">
                        <div class="footer-form-desc">
                            Свяжитесь с нами, и мы подберем для вам наиболее подходящее предложение
                        </div>
                        <form id="contact" method="post">
                            <div class="u-controls">
                                <input class="u-input js-email" type="text" placeholder="Ваш E-mail" name="email">
                            </div>
                            <div class="u-controls">
                                <input class="u-input js-name" type="text" placeholder="Как вас зовут" name="name">
                            </div>
                            <div class="u-controls">
                                <input class="u-input js-msg" type="text" placeholder="Вопрос или комментарий" name="msg">
                            </div>
                            <div class="u-controls center">
                                <button class="u-btn js-submit jk-btn-neon" type="submit" disabled>
                                    Отправить
                                </button>
                               
                            </div>
                            <div class="msg-note msg-note-footer">Сообщение отправленно</div>
                         
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-layout-menu">
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">О компании</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/o-kompanii/">О нас</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Партнерам</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">СМИ о нас</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">База знаний</a> </li>
                </ul>
            </div>
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">Продукты</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/property-developers">Для застройщиков</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/hotels">Для гостиниц</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/communal-services/">Для УК и ТСЖс</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/catalogs">Каталог</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Маркетплейс</a> </li>
                </ul>
            </div>
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">Приложения</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/">Ujin SmartHome</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Ujin Bussines</a> </li>
                </ul>
            </div>
        </div>
        <div class="footer-layout-bottom">
            <div class="footer-layout-bottom_item">
                <div class="footer-logo">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg">
                </div>
            </div>
            <div class="footer-layout-bottom_item">
                <span class="copy">ООО «Юникорн» 2019</span>
            </div>
            <div class="footer-layout-bottom_item">
                <div class="footer-el">

                </div>
            </div>
        </div>
    </div>
</footer>
<div id="manager" class="modal-manager mfp-hide">
    <div class="modal-manager-layout">
        <div class="manager-title">
            Введите ваш номер теелфона и E-mail для отправки расчета
        </div>
        <form class="manager-form">
            <div class="u-controls">
                <input type="text" class="u-input" name="fio" placeholder="Фамилия, Имя">
            </div>
            <div class="u-controls">
                <input type="text" class="u-input" name="phone" placeholder="Номер телефона">
            </div>
            <div class="u-controls">
                <input type="text" class="u-input" name="email" placeholder="Ваш E-mail">
            </div>
            <div class="manager-agree">
                Нажимая кнопку Отправить, вы принимаете <a href="#">условия соглашения</a>
            </div>
            <div class="manager-btn">
                <button type="submit" class="jk-btn jk-btn-neon call ">Отправить</button>
            </div>
        </form>
    </div>
    <div class="msg-note msg-note-manager">Сообщение отправленно</div>
</div>
<?php wp_footer(); ?>

<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/swiper.js"></script>
<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/jquery.magnific-popup.js"></script>
<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/app.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    jQuery(document).ready(function($) {
    const formSend = $("#contact");
	const formSendManager = $("#manager");
    const messageSendFooter = $(".msg-note-footer");
    const messageSendManager = $('.msg-note-manager');

        formSend.submit(function(e) {
            var str = $(this).serialize();
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo get_template_directory_uri() ?>/mail/mail.php",
                data: str,
                success: function(msg) {
                    if(!msg == 'OK') {messageSendFooter.fadeIn();} else {messageSendFooter.fadeIn();}
                }
            });
            return false;
        });
		 formSendManager.submit(function(e) {
            var str = $(this).serialize();  e.preventDefault();  $.ajax({ type: "POST",  url: "<?php echo get_template_directory_uri() ?>/mail/manager.php",    data: str,  success: function(msg) {if(!msg == 'OK') {messageSendManager.fadeIn();} else {messageSendManager.fadeIn();}   } }); return false; });
		
		
});
</script>
</body>
</html>