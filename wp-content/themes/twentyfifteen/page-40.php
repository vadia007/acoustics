<!--distributors page-->
<?php get_header(); ?>
<div id="content" class="news-page">
    <div class="inside">
        <div class="interior-top">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php $args = array(
            'category' => '2',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $newsPosts = get_posts($args);?>
        <?php foreach ($newsPosts as $newsPost) {
            setup_postdata($newsPost);?>
            <div class="news-box">
                <?php echo get_the_post_thumbnail(
                    $newsPost->ID,
                    array(424, 275),
                    array(
                        'class' => 'news-img'
                    )
                );?>
                <div class="news-content">
                    <p class="date">
                        <strong>NEWS / </strong>
                        <?php the_time('j.n.Y'); ?>
                    </p>

                    <h2>
                        <a href="<?php echo esc_url(get_permalink($newsPost->ID)); ?>">
                            <?php echo $newsPost->post_title; ?>
                        </a>
                    </h2>
                    <?php echo the_excerpt(); ?>
                    <a class="read-more" href="<?php echo get_permalink($newsPost->ID); ?>">Read More</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>