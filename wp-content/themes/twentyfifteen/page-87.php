<!--products page-->
<?php get_header(); ?>

<div id="content" class="about-page">
    <div class="inside">
        <div class="interior-top">
            <p><?php _e('О нас');?></p>
            <h1><?php _e('Ориентация на качество'); ?></h1>
        </div>

        <div class="content">
            <div class="info">
                <h3>
                    <?php _e('Разработано для улучшения звука');?>
                </h3>
                <p>
                    <strong>Компания Sonitus Acoustics Украина основана в 2009 году собственником звукозаписывающей студии.</strong>
                    <br/>
                    <br/>
                    Сегодня Sonitus Acoustics Украина не только брэнд, но и независимая компания-производитель, полностью контролирующая внутренний производственный процесс, тем самым предлагая хорошее качество продукта и стабильные цены. Наша миссия – улучшить акустическую среду помещения независимо от его предназначения: то ли это репетиционное помещение в гараже, студия или помещение с домашним кино. Персонал компании молод, открыт к развитию и всегда в погоне за более высоким качеством продукции с помощью новых материалов и технологий.
                </p>
            </div>

            <div class="quote">
                <p><?php _e('"Мы всегда открыты к улучшению качества нашей продукции при помощи новых материалов и технологий."');?></p>
                <div class="author">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/manuel-markovic.jpg" alt="Manuel Marković"/>
                    <p>
                        <span>Manuel Marković</span>
                        <br/>
                        CEO and Founder of Sonitus Acoustics
                    </p>
                </div>
            </div>
        </div>

        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-us.jpg" alt=""/>

        <div class="banners">
            <p class="heading">
                <?php _e('As seen on');?>
            </p>
            <a class="item" href="#">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/iDrum.jpg" alt="iDrum"/>
            </a>
            <a class="item" href="#">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/musikmesse-frankfurt.jpg" alt="Musikmesse Frankfurt"/>
            </a>
            <a class="item" href="#">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rhythm.jpg" alt="Rhythm"/>
            </a>
            <a class="item" href="#">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/high-end.jpg" alt="High End"/>
            </a>

        </div>


    </div>

<?php get_footer(); ?>