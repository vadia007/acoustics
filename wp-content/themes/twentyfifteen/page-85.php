<!--products page-->
<?php get_header(); ?>

<div id="content" class="contact-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('Контакты'); ?></p>

            <h1><?php _e('Свяжитесь с нами'); ?></h1>
        </div>

        <div class="info">
            <h3><?php _e('Sonitus Acoustics'); ?></h3>

            <p>
                <a href="mailto:info@sonitusacoustics.com">info@sonitusacoustics.eu</a>
                <br/>
                +385 (0) 91 510 4041
            </p>

            <div class="socials">
                <p>
                    <strong><?php _e('Follow us');?></strong>
                    <br/>
                    <a href="https://www.facebook.com/sonitus.musicshop.7" target="_blank">Facebook</a>
                    <span>|</span>
                    <a href="https://www.facebook.com/pages/Sonitus-Acoustics-Kicker/842953312398135" target="_blank">Facebook Kicker</a>
                </p>
            </div>
        </div>

        <div style="clear: both"></div>

        <div class="box">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-us-1.jpg" alt="">
        </div>

        <div class="box gray">
            <div class="content">
                <h3>Distributors</h3>
                <a href="#">distribution@sonitusacoustics.eu</a>
            </div>
        </div>

        <div class="box gray">
            <div class="content">
                <h3>Say Hello</h3>
                <a href="#">info@sonitusacoustics.eu</a>
            </div>
        </div>

        <div class="box">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-us-2.jpg" alt="">
        </div>

    </div>


<?php get_footer(); ?>