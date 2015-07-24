<!--distributors page-->
<?php get_header(); ?>
<div id="content" class="news-page">
    <div class="inside">
        <div class="interior-top">
            <?php $a = get_the_category($post->ID)?>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<?php get_footer(); ?>