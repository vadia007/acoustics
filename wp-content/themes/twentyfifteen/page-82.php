<!--products page-->
<?php get_header(); ?>

<div id="content" class="products-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('Sonitus Acoustics Украина');?></p>
            <h1><?php the_title(); ?></h1>
            <div class="filter">
                <select class="input" id="filter">
                    <option value="all-types">Все продукты</option>
                    <option value="absorbers">Поглотители</option>
                    <option value="diffusers">Рассеиватели</option>
                </select>
            </div>
        </div>

        <div class="listing">
            <?php $args = array(
                'orderby' => 'id',
                'order' => 'ASC',
                'hide_empty' => true,
                'fields' => 'all'
            );
            $product_categories = get_terms( array( 'product_category' ), $args );
            $number = 1;


            foreach($product_categories as $product_category) {?>

                <?php $category_fields = get_option( "taxonomy_" . $product_category->term_id );
                $type = $category_fields['category_type'];?>

                <a class="product-box all-types <?php echo $type; ?>"
                   href="<?php echo get_term_link((int)$product_category->term_id, 'product_category');?>">

                    <?php $img_id = tip_plugin_get_terms($product_category->term_id);
                    $img_url = wp_get_attachment_image_src($img_id, 'full');
                    $style = "background-image: url('" . $img_url[0] . "')"; ?>

                    <div class="product-image"
                         style="<?php echo $style;?>"></div>

                    <h4><?php echo strlen( (string)$number ) > 1 ? $number : '0' . $number; ?></h4>
                    <h3><?php echo $product_category->name; ?></h3>

                </a>
                <?php $number++;?>
            <?php }?>
        </div>
    </div>

<?php get_footer(); ?>