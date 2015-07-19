<?php get_header(); ?>

<div class="top-slider">
    <div class="home-slider">
        <div class="slide" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/world-class-acoustics.jpg)">
            <div class="inside">
                <h2>
                    World-Class
                    <br>
                    Acoustics
                </h2>
                <p>From finest materials to finest products.</p>
            </div>
        </div>
        <div class="slide" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/sonitus-acoustics-desosorber.jpg)">
            <div class="inside">
                <h2>
                    World-Class
                    <br>
                    Acoustics
                </h2>
                <p>From finest materials to finest products.</p>
            </div>
        </div>
        <div class="slide" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/sonitus-quadsorber.jpg)">
            <div class="inside">
                <h2>
                    World-Class
                    <br>
                    Acoustics
                </h2>
                <p>From finest materials to finest products.</p>
            </div>
        </div>
    </div>
</div>

<?php $newsCategory = get_term( 2, 'category' );
$args = array(
    'category' => '2',
    'orderby'  => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
);
$newsPosts = get_posts( $args );?>
<div class="news">
    <div class="inside">
        <h3><?php echo $newsCategory->name;?></h3>
        <p><?php echo $newsCategory->description;?></p>
        <?php foreach($newsPosts as $item => $post) {
            setup_postdata( $post );?>
            <div class="box <?php echo $item == 2 ? 'last' : '';?>">
                <p class="date">
                    <strong>NEWS / </strong>
                    <?php the_time('j.n.Y');?>
                </p>
                <h2>
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php the_title();?>
                    </a>
                </h2>
                    <?php echo the_excerpt();?>
                <a class="more-link" href="<?php echo get_permalink();?>">Read More</a>
            </div>

        <?php }?>


    </div>

</div>

<?php get_footer(); ?>