<div class="blog-tips">
        <h2>Tips to travel to Toronto</h2>
        <?php 
        
        $travelTips = new WP_Query(array (
            'cat' => 3,
            'order' => 'DESC',
            'orderby' => 'date',
        ));?>

        <ul>

        <?php

        while($travelTips->have_posts()) {
            $travelTips->the_post();?>

                    <li>
                    
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium-blog'); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more">
                        
                            Continue Reading
                        
                        </a>

                    </li>

            <?php
        } wp_reset_postdata();
        
        ?></ul>
    </div>