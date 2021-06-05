<div id="slider">
    <ul class="bxslider">
        <?php  
            $slider = new WP_Query(
                array (
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post'
                )
                );

                while($slider->have_posts()) {
                    $slider->the_post(); ?>

                    <li>
                        <a href="<?php the_permalink(); ?>">
                          <?php  the_post_thumbnail('featured'); ?>
                        </a>
                    </li>

                    <?php
                }
                wp_reset_postdata();

        ?>
    </ul>
</div