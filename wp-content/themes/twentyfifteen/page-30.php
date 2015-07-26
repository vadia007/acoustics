<!--distributors page-->
<?php get_header(); ?>

<div id="content" class="distributors-page">
    <div class="inside">
        <div class="interior-top">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="tab-nav">
            <a data-id="sonitus-acoustics" href="#" class="tab-nav-link active">Sonitus Acoustics</a>
            <a data-id="kicker" href="#" class="tab-nav-link">Kicker</a>
        </div>
        <?php $args = array(
            'category' => '4',
            'orderby'  => 'name',
            'order' => 'ASC',
        );
        $sonitusPosts = get_posts( $args );
        $args = array(
            'category' => '5',
            'orderby'  => 'name',
            'order' => 'ASC',
        );
        $kickerPosts = get_posts( $args );
        ?>
        <div class="tab-content active" id="sonitus-acoustics">
            <?php foreach($sonitusPosts as $sonitusPost) {
                setup_postdata($sonitusPost);?>
                <div class="box">
                    <div class="country">
                        <?php echo $sonitusPost->post_title;?>
                    </div>
                    <?php the_content();?>
                </div>
            <?php }?>
        </div>
        <div class="tab-content" id="kicker">
            <?php foreach($kickerPosts as $kickerPost) {
                setup_postdata($kickerPost);?>
                <div class="box">
                    <div class="country">
                        <?php echo $kickerPost->post_title;?>
                    </div>
                    <?php the_content();?>
                </div>
            <?php }?>
        </div>

        <div class="become-distributor">
            <h3><?php _e('Стать дистрибьютором'); ?></h3>
            <a class="btn" href="<?php echo get_page_link(85); ?>"><?php _e('Связаться с нами') ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>