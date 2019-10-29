<div class="smi box">
    <div class="smi-head">
        <h3 class="title-h3">СМИ о нас</h3>
    </div>
    <div class="smi-layout grid-four">
        <?php $smiujinjk = new WP_Query(array('post_type' => 'smiujinjk', 'order' => 'ASC')) ?>
                    <?php if ($smiujinjk->have_posts()): ?>
                        <?php while ($smiujinjk->have_posts()) : $smiujinjk->the_post(); ?>
                          
                
                              
                               <div class="smi-title">
                                   <a href="#"><?php the_title(); ?></a>
                               </div>
                              
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
    </div>
</div>
<style>
.smi {
        padding-bottom: 50px;
}
    .smi-head {
            padding-bottom: 30px;
    }
    .smi-layout {
        grid-column-gap: 32px;
        grid-row-gap: 36px;
    }
    .smi-title a {
        font-weight: normal;
        font-size: 18px;
        line-height: 120%;
        text-decoration: underline;
        color: #0090A1;
        transition: .3s;
    }
    .smi-title a:hover {
        color: #2D3C3E;
    }
</style>