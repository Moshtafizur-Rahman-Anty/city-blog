<div class="aboutUs">

        <?php $aboutUs = new WP_Query(
            'page_id=12'
        );

        while($aboutUs->have_posts()) {
            $aboutUs->the_post();
        ?>

       <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a
        <?php the_excerpt(); ?>

        <?php } wp_reset_postdata(); ?>

</div>