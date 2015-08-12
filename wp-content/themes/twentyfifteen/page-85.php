<!--products page-->
<?php get_header(); ?>

<div id="content" class="contact-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('Контакты'); ?></p>

            <h1><?php _e('Свяжитесь с нами'); ?></h1>
        </div>

        <div class="info">
            <h3><?php _e('Sonitus Acoustics Украина'); ?></h3>

            <?php $custom_fields = get_post_custom(); ?>

            <p>
                <?php if(isset($custom_fields['email'][0])) { ?>
                    <a href="mailto:<?php echo $custom_fields['email'][0]; ?>">
                        <?php echo $custom_fields['email'][0]; ?></a>
                    <?php } else { ?>
                    <a href="mailto:sonitusacoustics.com.ua">sonitusacoustics.com.ua</a>
                <?php } ?>

                <br/>
                <?php echo isset($custom_fields['phone'][0]) ? $custom_fields['phone'][0] : ''; ?>
            </p>

            <div class="socials">
                <p>
                    <strong><?php _e('Follow us');?></strong>
                    <br/>
                    <a href="<?php echo isset($custom_fields['facebook'][0]) ? $custom_fields['facebook'][0] : 'https://www.facebook.com/sonitus.musicshop.7'; ?>"
                       target="_blank">Facebook</a>
                </p>
            </div>
        </div>

        <div style="clear: both"></div>

<!--        <div class="box">-->
<!--            <img src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/img/contact1.jpg" alt="">-->
<!--        </div>-->
<!---->
<!--        <div class="box gray">-->
<!--            <div class="content">-->
<!--                <h3>Distributors</h3>-->
<!--                <a href="#">distribution@sonitusacoustics.eu</a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="box gray">-->
<!--            <div class="content">-->
<!--                <h3>Say Hello</h3>-->
<!--                <a href="#">info@sonitusacoustics.eu</a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="box">-->
<!--            <img src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/img/contact2.jpg" alt="">-->
<!--        </div>-->
        
        <div class="collage">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_CRO_PEAR_SG.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DS_DOT_MAPLE.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DS_QUAD_MAPLE.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DS_TRIANGLE_WHITE.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_QUAD_BLACK_SG.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_K6_INDIAN_RED_SG.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_TRAINGLE_RIO_ROSEWOOD.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_DOT_INDIAN_RED_SG.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_QUAD_RIO_ROSEWOOD.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_TRIANGLE_WHITE_SG.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_DOT_RIO_ROSEWOOD.jpg" alt=""/>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/collage/DSE_TRIANGLE_PEAR_HG.jpg" alt=""/>
        </div>

    </div>


<?php get_footer(); ?>