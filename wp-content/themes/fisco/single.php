<?php get_header(); ?>

<div id="body">
    <div>
        <h1><?php single_cat_title() ?></h1>
<!--        <img src="--><?//= get_theme_file_uri('assets/images/grew-a-mustache.jpg') ?><!--" alt="">-->
        <?= the_post_thumbnail() ?>
        <div class="article">
            <?= the_content() ?>
        </div>

        <div>
            <?= previous_post_link('上一篇：%link') ?>
            <?= next_post_link('下一篇：%link') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>