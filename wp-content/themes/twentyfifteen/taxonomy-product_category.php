<!--category products page-->
<?php get_header(); ?>

<div id="content" class="products-listing-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('Sonitus Acoustics Украина'); ?></p>

            <?php $taxonomy = get_queried_object(); ?>

            <h1><?php echo $taxonomy->name; ?></h1>

            <div class="breadcrumbs">
                <a href="<?php echo get_page_link(82);?>"><?php _e('Продукты');?></a>
                <span class="devider">/</span>
                <span><?php echo $taxonomy->name; ?></span>
            </div>
        </div>

        <div class="description">
            <p><?php echo $taxonomy->description; ?></p>
        </div>

        <?php $category_fields = get_option("taxonomy_" . $taxonomy->term_id);
        $type = $category_fields['category_type'];?>

        <?php foreach ($posts as $post) {
            setup_postdata($post);
            $custom_fields = get_post_custom($post->ID);
            if (isset($custom_fields['wpcf-product-img'][0]) && $custom_fields['wpcf-product-img'][0])
                $img_url = $custom_fields['wpcf-product-img'][0];
            else
                $img_url = '';?>

            <div class="list">
                <a class="item" href="<?php echo get_permalink(); ?>">
                    <img src="<?php echo $img_url; ?>"
                         alt="<?php the_title(); ?>"/>

                    <h4><?php echo $type; ?></h4>

                    <h3><?php the_title(); ?></h3>
                    <span class="arrow"></span>
                </a>
            </div>

        <?php } ?>
        <div class="become-distributor">
            <a class="btn" href="<?php echo get_page_link(85); ?>"><?php _e('Связаться с нами') ?></a>
        </div>

    </div>


<?php get_footer(); ?>