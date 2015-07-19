<!--Portfolio page-->
<?php get_header(); ?>

<div id="content" class="references-page">
    <div class="inside">
        <div class="interior-top">
            <h1><?php the_title(); ?></h1>
        </div>

        <?php global $wpdb;
        $galleries = $wpdb->get_results("
	SELECT gid, path, title, galdesc
	FROM {$wpdb->prefix}flag_gallery
	WHERE status = 0
    ");

        $galleries_id = array();
        $galleries_by_id = array();
        foreach ($galleries as $gallery) {
            $galleries_id[] = $gallery->gid;
            $galleries_by_id[$gallery->gid] = $gallery;
            $galleries_by_id[$gallery->gid]->pictures = array();
        }

        $how_many = count($galleries_id);
        $placeholders = array_fill(0, $how_many, '%d');
        $format = implode(', ', $placeholders);

        $pictures = $wpdb->get_results(
            $wpdb->prepare("
	SELECT galleryid, filename
	FROM {$wpdb->prefix}flag_pictures
	WHERE galleryid IN ($format)
    ", $galleries_id)
        );

        foreach ($pictures as $picture) {
            $galleries_by_id[$picture->galleryid]->pictures[] = $picture->filename;
        }

        foreach ($galleries_by_id as $gallery_number => $gallery_by_id) {
            if (!empty($gallery_by_id)) {
                ?>
                <div class="project-box">
                    <img class="project-img"
                         src="<?php echo get_site_url() . '/' . $gallery_by_id->path . '/' . $gallery_by_id->pictures['0']; ?>"
                         alt=""/>

                    <div class="content-wrap">
                        <div class="content">
                            <h3><?php echo str_replace('\\', '', $gallery_by_id->title); ?></h3>
                            <?php if (count($gallery_by_id->pictures) > 1) ?>
                            <?php foreach ($gallery_by_id->pictures as $number => $picture) { ?>
                                <a class=" <?php echo $number == 0 ? 'btn fancybox' : 'gallery-img fancybox';?>"
                                   href="<?php echo get_site_url() . '/' . $gallery_by_id->path . '/' . $picture; ?>"
                                    rel="<?php echo 'references' . $gallery_number; ?>">
                                    <?php echo $number == 0 ? 'View More' : ''; ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>



<?php get_footer(); ?>

