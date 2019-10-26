<div class="projects-slider">
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
                                    <div class="p-slider-head-arrow mobile-hidden ">
                                        <div class="box-btn">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-slider-body">
                                    <?php echo get_field( "mini_desc" ); ?>
                                    <?php the_content(); ?>
                                    <div class="manager">
                                        <a href="#" type="button" class="jk-btn call">Связаться с менеджером</a>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-block">

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>


            </div>
        </div>
    </div>
</div>