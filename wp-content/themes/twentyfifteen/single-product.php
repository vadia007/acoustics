<!--products page-->
<?php get_header(); ?>

<div id="content" class="product-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('Акустика sonitus');?></p>

            <?php $taxonomy = wp_get_post_terms($post->ID, 'product_category');?>

            <h1><?php the_title(); ?></h1>

            <div class="breadcrumbs">
                <a href="<?php echo get_page_link(82);?>"><?php _e('Продукты');?></a>
                <span class="devider">/</span>
                <a href="<?php echo get_term_link((int)$taxonomy[0]->term_id, 'product_category');?>">
                    <?php echo $taxonomy[0]->name; ?>
                </a>
                <span class="devider">/</span>
                <span><?php the_title(); ?></span>
            </div>


        </div>

        <div class="product-slider">
            <div class="product-img-slider">

                <?php $custom_fields = get_post_custom($post->ID);

                if(isset($custom_fields['wpcf-product-img'][0]) && [0])

                    foreach($custom_fields['wpcf-product-img'] as $img) {?>

                        <?php if($img) {?>

                            <div class="slide">
                                <img src="<?php echo $img; ?>" alt=""/>
                            </div>

                        <?php }?>

                    <?php }?>
            </div>
        </div>

        <div class="product-info">
            <?php if(isset($custom_fields['wpcf-description'][0]) && $custom_fields['wpcf-description'][0]) {
                ?>
                <h2><?php _e('Описание');?></h2>
                <div class="description">
                    <p><?php echo $custom_fields['wpcf-description'][0];?></p>
                </div>

                <h2><?php _e('Характеристики');?></h2>

                <?php if(isset($custom_fields['wpcf-demension'][0]) && $custom_fields['wpcf-demension'][0]) {?>

                    <div class="item">
                        <label for=""><?php _e('Размер');?></label>
                        <p><?php echo wpautop($custom_fields['wpcf-demension'][0]); ?></p>
                    </div>

                <?php }?>

                <?php if(isset($custom_fields['wpcf-material'][0]) && $custom_fields['wpcf-material'][0]) {?>

                    <div class="item">
                        <label for=""><?php _e('Материал');?></label>
                        <p><?php echo wpautop($custom_fields['wpcf-material'][0]); ?></p>
                    </div>

                <?php }?>

                <?php if(isset($custom_fields['wpcf-base-thickness'][0]) && $custom_fields['wpcf-base-thickness'][0]) {?>

                    <div class="item">
                        <label for=""><?php _e('Толщина основы панели');?></label>
                        <p><?php echo wpautop($custom_fields['wpcf-base-thickness'][0]); ?></p>
                    </div>

                <?php }?>

                <?php if(isset($custom_fields['wpcf-color'][0]) && $custom_fields['wpcf-color'][0]) {?>

                    <div class="item">
                        <label for=""><?php _e('Цвет');?></label>
                        <p><?php echo wpautop($custom_fields['wpcf-color'][0]); ?></p>
                    </div>

                <?php }?>

                <?php if(isset($custom_fields['wpcf-packege'][0]) && $custom_fields['wpcf-packege'][0]) {?>

                    <div class="item">
                        <label for=""><?php _e('Комплект упаковки');?></label>
                        <p><?php echo wpautop($custom_fields['wpcf-packege'][0]); ?></p>
                    </div>

                <?php }?>

                <p class="installation">
                    <?php _e('Простая установка с распыляющим клеем или другими универсалиными средствами.');?>
                </p>

                <a class="btn" href="<?php echo get_page_link(85);?>"><?php _e('Связаться с нами')?></a>

            <?php }?>
        </div>

    </div>



<?php get_footer(); ?>