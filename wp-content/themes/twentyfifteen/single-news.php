<!--distributors page-->
<?php get_header(); ?>
<div id="content" class="news-page">
    <div class="inside">
        <div class="interior-top">

            <p><?php _e('What`s new');?></p>
            <?php $category = get_the_category($post->ID) ?>
            <h1><?php echo $category[0]->name; ?></h1>

        </div>

            <div class="news-box">
                <?php echo get_the_post_thumbnail($post->ID, array(424, 295), array('class' => 'news-img')); ?>
                <div class="news-content">
                    <p class="date">
                        <strong>NEWS / </strong>
                        <?php the_time('j.n.Y'); ?>
                    </p>

                    <h2>
                        <?php the_title(); ?>
                    </h2>

                    <div class="content">
                        <?php echo wpautop($post->post_content, true); ?>
                    </div>
                    <a class="read-more" href="<?php echo get_page_link(40);?>">
                        <?php _e('Вернуться'); ?>
                    </a>
                </div>
            </div>

    </div>
</div>
<?php get_footer(); ?>