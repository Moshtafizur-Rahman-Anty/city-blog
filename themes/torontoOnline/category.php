<?php get_header(); ?>

<h1><?php _e('Category: ', 'torantoOnline') . single_cat_title(); ?></h1>

<div id="primary" class="primary post-<?php the_ID(); ?>">
    <?php while(have_posts()) {
       the_post(); ?> 
        <article>
<a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail("medium-blog"); ?></a>
            <div class="content-post">

            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            </div>

        </article>
        <?php
    } ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>