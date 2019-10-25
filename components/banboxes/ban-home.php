<div class="head-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <?php $banhome = new WP_Query(array('post_type' => 'banhome', 'order' => 'ASC')) ?>
    <?php if ($banhome->have_posts() ): ?>
    <?php while ($banhome->have_posts()) : $banhome->the_post(); ?>
    <div class="head-box-layout double-box box">

        <div class="head-box-desc">

            <div class="title-h1 title-box"><?php the_content(); ?></div>
            <div class="head-btn">
                <a href="#downloadDemo" class="jk-btn down js-demo-down">Скачать демо-версию</a>
                <a href="#videoDemo" type="button" class="jk-btn play js-demo-video">Смотреть видео</a>
            </div>
            <div id="downloadDemo" class="download-popup mfp-hide">
                <div class="down-popup">
                    <div class="down-popup-title">Скачать демо-версию</div>
                    <div class="down-popup-links">
                        <a href="<?php echo  get_field('googleplay'); ?>" class="link-google">GooglePlay</a>
                        <a href="<?php echo  get_field('appstore'); ?>" class="link-app">AppStore</a>
                    </div>
                </div>
            </div>
            <div id="videoDemo" class="video-popup mfp-hide">
                <div class="video-popup-layout">
                    <div class="popup-video">
                        <iframe width="100%" height="315"
                                src="<?php echo  get_field('link_video'); ?>" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
			<div class="head-box-desc-content">
                <?php echo  get_field('contentban'); ?>
            </div>

        </div>
    
        <div class="head-box-cover">
            <img src="<?php echo  get_field('illustrban'); ?>">
        </div>

    </div>
        <div class="head-cont box">
            <div class="head-cont-title"><?php echo  get_field('titlebantwo'); ?></div>
            <div class="head-cont-desc"><?php echo  get_field('banmini_content'); ?></div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
        <div class="ban-counter box">
            <?php $counterBan = new WP_Query(array('post_type' => 'counterBan', 'order' => 'ASC')) ?>
            <?php if ($counterBan->have_posts() ): ?>
            <?php while ($counterBan->have_posts()) : $counterBan->the_post(); ?>
            <div class="ban-counter-item">
                <div class="ban-counter-icon">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
                <div class="ban-counter-number">
                    <?php the_title(); ?>
                </div>
                <div class="ban-counter-label">
                    <?php echo  get_field('label_counterBan'); ?>
                </div>
                <div class="ban-counter-desc">
                    <?php the_content(); ?>
                </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
</div>