<?php get_header(); ?>

    <div id="body">
        <h1><span><?= single_cat_title() ?></span></h1>

        <?php if (have_posts()): ?>
        <ul class="gallery">
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?= the_permalink() ?>">
                    <?= get_post_gallery(the_ID()) ?>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
            暂无内容
        <?php endif; ?>
    </div>

<?php get_footer(); ?>