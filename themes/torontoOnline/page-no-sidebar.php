<?php /* 

Template Name: No Sidebar

*/ 
get_header();
 ?>
 
<div class="container-contact">
<?php if(has_post_thumbnail()) { ?>
<div class="featured">
    <?php the_post_thumbnail(); ?>
    <h2><?php the_title(); ?></h2>
    </div>
<?php } else {?>
<h2 class="noimage"> <?php the_title() ?></h2>
<?php } ?>
<div id="primary" class="primary post-<?php the_ID(); ?>">
    <?php while(have_posts()) {
       the_post(); ?> 

            <p><?php the_content(); ?></p>
        <?php
    } ?>
</div>
</div>

<?php get_footer(); ?>