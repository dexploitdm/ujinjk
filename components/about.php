<div class="about" style="background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/bg_about.png)">
    <div class="breadcrumbs">
        <ul>
            <li><a href="#">О продукте</a> </li>
            <li><a href="#">Наши проекты</a> </li>
            <li><a href="#"  class="active">О нас</a> </li>
            <li><a href="#">Контакты</a> </li>
        </ul>
    </div>
    <div class="about-head box">
        <h2 class="title-h2">О нас</h2>
    </div>
    <div class="about-desc box">
        <div class="about-logo">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/unicorn.png">
        </div>
        <div class="about-content">
            Компания “Юникорн” реализует систему “Умный Дом”,
            создает мобильные приложения для крупных
            застройщиков современных жилых домов,
            жилых комплексов и кварталов.
        </div>
        <div class="about-text">
            <p>К нам обращаются, чтобы заказать интеграцию всех инженерных
                систем жилого комплекса на единой платформе с возможностью
                использования всеми жильцами дома для их удобства и комфорта.</p>

            <p>Работаем по всей России.</p>
        </div>
    </div>
    <div class="about-info">
        <div class="about-info-title">
            Проекты под ключ* могут включать в себя:
        </div>
        <div class="about-info-desc">
            *мы не навязываем все услуги, их выбираете вы, исходя из ваших потребностей
        </div>
    </div>

    <div class="service-projects">
        <div class="service-layout grid-four mobile-hidden box">
            <?php $service_projects = new WP_Query(array('post_type' => 'projects_services', 'order' => 'ASC')) ?>
            <?php if ($service_projects->have_posts()): ?>
            <?php while ($service_projects->have_posts()) : $service_projects->the_post(); ?>
            <div class="service-item">
                <div class="service-icon">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>

                <div class="service-box">
                    <div class="service-box-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="service-box-desc">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>

        <div class="service-layout block-mobile service-mobile box">
            <div class="swiper-container-abouts">
          
                <div class="swiper-wrapper">

                 <?php $service_projects = new WP_Query(array('post_type' => 'projects_services', 'order' => 'ASC')) ?>
            <?php if ($service_projects->have_posts()): ?>
            <?php while ($service_projects->have_posts()) : $service_projects->the_post(); ?>
                        <div class="service-item swiper-slide slider-item">
                            <div class="service-icon">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                            </div>
            
                            <div class="service-box">
                                <div class="service-box-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="service-box-desc">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                          <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
                </div>
                  <div class="swiper-pagination"></div>
            </div>
            
            
        </div>

        <div class="manager">
            <a href="#manager" type="button" class="jk-btn call js-form-manager">Связаться с менеджером</a>
        </div>
    </div>

</div>