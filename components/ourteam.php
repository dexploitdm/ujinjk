<div class="ourteam box">
    <div class="ourteam-head">
        <h3 class="title-h3">Наша команда</h3>
    </div>
    <div class="ourteam-layout">
         <?php $ourteam = new WP_Query(array('post_type' => 'ourteam', 'order' => 'ASC')) ?>
                    <?php if ($ourteam->have_posts()): ?>
                        <?php while ($ourteam->have_posts()) : $ourteam->the_post(); ?>
                          
                           <div class="ourteam-box">
                               <div class="ourteam-cover">
                                   <img src="<?php the_post_thumbnail_url(); ?>">
                                   <?php if( get_field("people_link") ): ?>
                                       <a href="<?php echo  get_field('people_link'); ?>" target="_blank" class="ourteam-link"></a>
                                   <?php endif; ?>

                               </div>
                               <div class="ourteam-name">
                                   <?php the_title(); ?>
                               </div>
                               <div class="ourteam-desc">
                                   <?php the_content(); ?>
                               </div>
                           </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
    </div>
</div>