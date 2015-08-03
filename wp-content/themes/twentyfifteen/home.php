<?php get_header(); ?>

    <div class="top-slider">
        <div class="home-slider">
            <div class="slide"
                 style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/world-class-acoustics.jpg)">
                <div class="inside">
                    <h2>
                        Акустические материалы
                        <br>
                        мирового класса
                    </h2>

                    <p>От лучших материалов к лучшим продуктам.</p>
                </div>
            </div>
            <div class="slide"
                 style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/sonitus-acoustics-desosorber.jpg)">
                <div class="inside">
                    <h2>
                        Акустические материалы
                        <br>
                        мирового класса
                    </h2>

                    <p>От лучших материалов к лучшим продуктам.</p>
                </div>
            </div>
            <div class="slide"
                 style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/sonitus-quadsorber.jpg)">
                <div class="inside">
                    <h2>
                        Акустические материалы
                        <br>
                        мирового класса
                    </h2>

                    <p>От лучших материалов к лучшим продуктам.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="home-page">
        <div class="product-info">
            <div class="inside">
                <h3><?php _e('Наши продукты'); ?></h3>

                <p>Наш список состоит более чем из <strong>243</strong> продуктов в <strong>9</strong> производственных
                    линиях. Проверьте это и найти лучшее изделие для себя!</p>

                <div class="product-slider-controls">
                    <div id="product-slider-prev"></div>
                    <div id="product-slider-next"></div>
                </div>
            </div>

            <div class="product-slider-wrap">
                <?php $args = array(
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'hide_empty' => true,
                    'fields' => 'all'
                );
                $product_categories = get_terms(array('product_category'), $args);
                $number = 1;

                foreach ($product_categories as $product_category) {

                    $img_id = tip_plugin_get_terms($product_category->term_id);
                    $img_url = wp_get_attachment_image_src($img_id, 'full');
                    $style = "background-image: url('" . $img_url[0] . "')"; ?>

                    <a class="slide" style="<?php echo $style; ?>"
                       href="<?php echo get_term_link((int)$product_category->term_id, 'product_category'); ?>">

                        <h4><?php echo strlen((string)$number) > 1 ? $number : '0' . $number; ?></h4>

                        <h3><?php echo $product_category->name; ?></h3>

                    </a>

                    <?php $number++; ?>
                <?php } ?>

            </div>

            <div class="inside">
                <div class="counters-wrap">
                    <p class="info">
                        <?php _e('From the simple budget solution for a band garage to high class products for your studio, home cinema or even living room, depends where you wish to have a great sounding and looking space. We also have our drum accessory line, the Kicker.'); ?>
                    </p>

                    <div class="counters">
                        <div class="counter">
                            <h3>9</h3>

                            <p>Product lines</p>
                        </div>
                        <div class="counter">
                            <h3>247</h3>

                            <p>Products</p>
                        </div>
                        <div class="counter">
                            <h3>14</h3>

                            <p>Distributors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $newsCategory = get_term(2, 'category');
        $args = array(
            'category' => '2',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,
        );
        $newsPosts = get_posts($args);?>
        <div class="news">
            <div class="inside">
                <h3><?php echo $newsCategory->name; ?></h3>

                <p><?php echo $newsCategory->description; ?></p>
                <?php foreach ($newsPosts as $item => $post) {
                    setup_postdata($post);?>
                    <div class="box <?php echo $item == 2 ? 'last' : ''; ?>">
                        <p class="date">
                            <strong>НОВОСТИ / </strong>
                            <?php the_time('j.n.Y'); ?>
                        </p>

                        <h2>
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php echo the_excerpt(); ?>
                        <a class="more-link" href="<?php echo get_permalink(); ?>">Read More</a>
                    </div>

                <?php } ?>

            </div>
        </div>

<!--        <div class="kicker-banner">-->
<!--            <div class="bg">-->
<!--            </div>-->
<!--            <div class="inside">-->
<!--                <img class="banner"-->
<!--                     src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/img/sonitus-kicker.jpg" alt=""/>-->
<!---->
<!--                <h3>-->
<!--                    --><?php //$taxonomy = get_term(15, 'product_category'); ?>
<!---->
<!--                    <a href="--><?php //echo get_term_link(15, 'product_category'); ?><!--">-->
<!--                        --><?php //_e('KICKER'); ?>
<!--                    </a>-->
<!--                </h3>-->
<!---->
<!--                <p>--><?php //_e('WORLD`S FIRST "HEAD TO HEAD" BASS DRUM MUFFLER.'); ?><!--</p>-->
<!--                <a class="arrow" href="--><?php //echo get_term_link(15, 'product_category'); ?><!--"></a>-->
<!--            </div>-->
<!--        </div>-->

    </div>

<?php get_footer(); ?>