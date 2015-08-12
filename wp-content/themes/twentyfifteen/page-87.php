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
                    <strong>Компания Sonitus Acoustics основана в 2009 году собственником звукозаписывающей студии.</strong>
                    <br/>
                    <br/>
                    Сегодня Sonitus Acoustics не только брэнд, но и независимая компания-производитель, полностью контролирующая внутренний производственный процесс, тем самым предлагая хорошее качество продукта и стабильные цены. Наша миссия – улучшить акустическую среду помещения независимо от его предназначения: то ли это репетиционное помещение в гараже, студия или помещение с домашним кино. Персонал компании молод, открыт к развитию и всегда в погоне за более высоким качеством продукции с помощью новых материалов и технологий.
                </p>
            </div>

            <div class="quote">
                <p><?php _e('"Мы всегда открыты к улучшению качества нашей продукции при помощи новых материалов и технологий."');?></p>
                <div class="author">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/manuel-markovic.jpg" alt="Manuel Marković"/>
                    <p>
                        <span>Мануэль Маркович</span>
                        <br/>
                        Управляющий директор и основатель Sonitus Acoustics
                    </p>
                </div>
            </div>

            <?php $custom_fields = get_post_custom(); ?>

            <div class="info info-ukraine">
                <h3>
                    <?php _e('ПОСТАВЛЯЕТСЯ ДЛЯ УДОВЛЕТВОРЕНИЯ ПОТРЕБИТЕЛЯ');?>
                </h3>
                <p>
                    <?php echo isset($custom_fields['text'][0]) ? $custom_fields['text'][0] : ''; ?>
                </p>
            </div>

            <div class="quote quote-ukraine">
                <p><?php echo isset($custom_fields['quote'][0]) ? $custom_fields['quote'][0] : ''; ?></p>
                <div class="author">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/marina100.jpg" alt="Репенко Марина"/>
                    <p>
                        <span>Репенко Марина</span>
                        <br/>
                        <?php echo isset($custom_fields['post'][0]) ? $custom_fields['post'][0] : ''; ?>
                    </p>
                </div>
            </div>

        </div>

<!--        <img src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/img/about-us.jpg" alt=""/>-->

<!--        <div class="banners">
            <p class="heading">
                <?php /*_e('As seen on');*/?>
            </p>
            <a class="item" href="#">
                <img src="<?php /*echo esc_url(get_template_directory_uri()); */?>/img/iDrum.jpg" alt="iDrum"/>
            </a>
            <a class="item" href="#">
                <img src="<?php /*echo esc_url(get_template_directory_uri()); */?>/img/musikmesse-frankfurt.jpg" alt="Musikmesse Frankfurt"/>
            </a>
            <a class="item" href="#">
                <img src="<?php /*echo esc_url(get_template_directory_uri()); */?>/img/rhythm.jpg" alt="Rhythm"/>
            </a>
            <a class="item" href="#">
                <img src="<?php /*echo esc_url(get_template_directory_uri()); */?>/img/high-end.jpg" alt="High End"/>
            </a>

        </div>-->


    </div>

<?php get_footer(); ?>