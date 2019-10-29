<div class="partners">
    <div class="partners-head box">
        <h3 class="title-h3">Нам уже доверяют</h3>
    </div>
    
    
    <div class="partners-layout">
        <div class="swiper-container-partners">
            <div class="swiper-wrapper">
              
               
            
            
                    <?php $partners = new WP_Query(array('post_type' => 'partners', 'order' => 'ASC')) ?>
                    <?php if ($partners->have_posts()): ?>
                        <?php while ($partners->have_posts()) : $partners->the_post(); ?>
                          
                           <div class="swiper-slide">
                               <div class="partners-cover">
                                   <img src="<?php the_post_thumbnail_url(); ?>">
                               </div>
                           </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                
            </div>
            
        </div>
    </div>
</div>
