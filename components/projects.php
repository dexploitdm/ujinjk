<div class="projects-slider anchor" id="project-anchor">
    <div class="projects-slider-head box">
        <h2 class="title-h2">Наши проекты</h2>
    </div>
    <div class="p-slider box">
        <div class="swiper-container-pr">

            <div class="swiper-wrapper">

                <?php $projects = new WP_Query(array('post_type' => 'projects', 'order' => 'ASC')) ?>
                <?php if ($projects->have_posts()): ?>
                    <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                        <div class="swiper-slide p-slider-box">
                            <div class="p-slider-box-cover"
                                 style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                                <?php
                                $elementsIcons = get_field('view_el');
                                if( $elementsIcons ): ?>

                                    <?php foreach( $elementsIcons as $elementsIcon ): ?>
                                        <a href="#<?php echo $elementsIcon; ?>" class="<?php echo $elementsIcon; ?>"><div class="el-icon"></div></a>
                                    <?php endforeach; ?>

                                <?php endif; ?>
                                <a href="#info_project" class="info_project js-info-pro"><span class="info-icon"></span></a>
                            </div>
                            <div class="p-slider-box-desc">
                                <div class="p-slider-head">
                                    <div class="p-slider-head-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>

                                            <span><?php echo  get_field('city_projects'); ?> —
                                                <?php echo get_field( "year_project" ); ?></span>
                                        </a>
                                    </div>

                                    <div class="p-slider-head-arrow">
                                        <div class="box-btn">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-slider-body">
                                    <div class="mini-desc">
                                        <?php echo get_field( "mini_desc" ); ?>
                                    </div>
                                    <?php the_content(); ?>
                                    <div class="manager">
                                        <a href="#manager" type="button" class="jk-btn call js-form-manager">Связаться с менеджером</a>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-block">

                            </div>
                            <div id="info_project" class="modal-emblem project-info-modal mfp-hide">
                                <div class="emblem-layout">
                                    <div class="emblem-layout-box">
                                        <div class="emblem-content">
                                            <div class="emblem-content-text">
                                                <div class="element-title">
                                                    <button type="button" class="close-el el-hidden"></button>
                                                </div>
                                                <div class="element-desc">
                                                    <?php echo get_field( "mini_desc" ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>


            </div>
        </div>
    </div>

    <?php $emblem = new WP_Query(array('post_type' => 'projects_emblem', 'order' => 'ASC'));
    $countAll = wp_count_posts('projects_emblem')->publish;
    $counter = 0; ?>
    <?php if ($emblem->have_posts()): ?>
    <?php while ($emblem->have_posts()) : $emblem->the_post(); $counter++ ?>
    <div id="e<?php echo $counter ?>" class="modal-emblem mfp-hide">
        <div class="emblem-layout">
            <div class="emblem-layout-box">

                <div class="emblem-content">
                    <div class="element-icon">
                        <img src="<?php echo get_field( "emblem_icon" ); ?>">
                    </div>
                    <div class="emblem-content-text">
                        <div class="element-title">
                           <p><?php the_title(); ?></p>
                            <button type="button" class="close-el el-hidden"></button>
                        </div>
                        <div class="element-desc">
                            <?php the_content(); ?>
                        </div>
                        <div class="element-mini">
                            <?php echo get_field( "desc_emblem" ); ?>
                        </div>
                        <div class="element-arrows">
                            <?php if($counter == 1): ?>
                            <a href="#e1" class="prev not"></a>
                            <?php else: ?>
                                <a href="#e<?php echo $counter - 1 ?>" class="prev e<?php echo $counter - 1 ?>"></a>
                            <?php endif; ?>
                            <?php if($counter == $countAll): ?>
                                <a href="#e1" class="next not"></a>
                            <?php else: ?>
                                <a href="#e<?php echo $counter + 1 ?>" class="next e<?php echo $counter + 1 ?>"></a>
                            <?php endif; ?>
                        </div>
                        <div class="element-btn">
                            <a href="#manager" class="jk-btn call js-form-manager">Связаться с менеджером</a>
                        </div>
                    </div>
                </div>
                <div class="emblem-cover">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </div>
        </div>
    </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>