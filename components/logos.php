<div class="logos box">
    <div class="logos-layout">
        <div class="swiper-container-logos">
            <div class="swiper-wrapper">
              
               
            
            
                    <?php $smiujinjk = new WP_Query(array('post_type' => 'smiujinjk', 'order' => 'ASC')) ?>
                    <?php if ($smiujinjk->have_posts()): ?>
                        <?php while ($smiujinjk->have_posts()) : $smiujinjk->the_post(); ?>

                           <div class="swiper-slide">
                               <div class="smi-title">
                                   <a href="#"><?php the_title(); ?></a>
                               </div>
                               <div class="partners-cover">
                                   <img src="<?php the_post_thumbnail_url(); ?>">
                               </div>
                           </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                
            </div>
            
            <div class="logos-action box">
                <div class="logos-action-box">
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<style>

</style>