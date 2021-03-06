<div class="product anchor" id="product-anchor">
    <div class="product-head box">
        <h2 class="title-h2">О продукте</h2>
        <div class="car-btn">

            <!-- Add Arrows -->
            <button class="car-next pr-one-next"></button>
            <button class="car-prev pr-one-prev"></button>
        </div>
    </div>

    <div class="product-layout box">


        <div class="product-owl-box">
            <div class="title-slider title-slider_r">
                Наши возможности
            </div>
            <div class="owl-carousel product-one owl-theme">

                <?php $opportunities = new WP_Query(array('post_type' => 'opportunities', 'order' => 'ASC')) ?>
                <?php if ($opportunities->have_posts()): ?>
                    <?php while ($opportunities->have_posts()) : $opportunities->the_post(); ?>
                        <div class="slider-item">
                            <div class="slider-item-layout">
                                <div class="product-icon">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </div>
                                <div class="product-desc">
                                    <div class="product-desc-box">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
        <div class="product-owl-box">
            <div class="title-slider title-slider_l">
                Ваши преимущества
            </div>
            <div class="owl-carousel product-one owl-theme">

                <?php $advantage = new WP_Query(array('post_type' => 'product-advantage', 'order' => 'ASC')) ?>
                <?php if ($advantage->have_posts()): ?>
                    <?php while ($advantage->have_posts()) : $advantage->the_post(); ?>
                        <div class="slider-item">
                            <div class="slider-item-layout">
                                <div class="product-icon">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </div>
                                <div class="product-desc">
                                    <div class="product-desc-box">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
        <div class="product-btn">
            <a href="<?php echo get_theme_mod('linkPresentProduct'); ?>" target="_blank" class="jk-btn jk-btn-blue down">Скачать презентацию</a>
        </div>

    </div>
	
</div>