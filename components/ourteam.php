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
<style>
.ourteam {
        padding-bottom: 90px;

}
    .ourteam-head {
        padding-bottom: 24px;
    }
    .ourteam-layout {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr; 
        grid-column-gap: 32px;
        grid-row-gap: 36px;
    }
    .ourteam-cover {
        text-align: center;
        max-width: 138px;
        max-height: 138px;
        margin: auto;
    }
    .ourteam-name {
        padding-top: 24px;
        font-weight: normal;
        font-size: 18px;
        line-height: 120%;
        text-align: center;
        color: #2D3C3E;
    }
    .ourteam-desc {
        padding-top: 10px;
        font-weight: normal;
        font-size: 14px;
        line-height: 120%;
        text-align: center;
        color: #2D3C3E;
    }
</style>