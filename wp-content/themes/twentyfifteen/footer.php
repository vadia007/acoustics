<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer>

        <div class="inside">
            <div class="info">
                <h2><?php _e('Sonitus Acoustics Украина');?></h2>
                <p>
                    Tina Ujevića 26, Koprivnica<br>
                    48000 Croatia
                    <br><br>
					<span>
					+385 (0) 91 510 4041<br>
					info@sonitusacoustics.eu
					</span>
                </p>
            </div>

            <?php $args = array(
                'menu' => 3,
                'container_class' => 'footer-menu',
                'menu_id' => 'footer-menu'
            );?>

            <?php wp_nav_menu( $args );?>

            <div class="copyright">
                <p><?php _e('© Sonitus Acoustics Украина. All rights reserved.');?></p>
                <img class="logo"
                     src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sonitus-acoustics-footer.png"
                     alt="Logo"/>
            </div>


        </div>



	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
