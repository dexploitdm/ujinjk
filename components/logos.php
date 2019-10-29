<div class="logos box">
    <div class="logos-layout">
        <div class="swiper-container-logos">
            <div class="swiper-wrapper">
              
               
            
            
                    <?php $logosujinjk = new WP_Query(array('post_type' => 'logosujinjk', 'order' => 'ASC')) ?>
                    <?php if ($logosujinjk->have_posts()): ?>
                        <?php while ($logosujinjk->have_posts()) : $logosujinjk->the_post(); ?>
                          
                           <div class="swiper-slide">
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
.logos {
        overflow: hidden;
            padding-bottom: 164px;
}
    .logos-action-box {
        max-width: 75px;
    position: relative;
    margin-left: auto;
}

    .swiper-container-logos {
        width: 100%;
        height: 100%;
        position: relative;
    }
</style>