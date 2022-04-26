<?php get_header(); ?>

    <div id="body">
        <div>
            <?php
            $perpage = 10;
            $paged = get_query_var('paged', 1);

            $params = [
                'post_type' => 'post',
                'cat' => 5,
                'posts_per_page' => $perpage,
                'page' => $paged,
                'post_status' => 'publish',
            ];
            $query = new WP_Query($params);
            if ($query->have_posts()): ?>
                <ul>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="<?= $query->found_posts ?>">
                            <a href="<?=get_permalink()?>" class="figure">
                                <img src="<?=the_post_thumbnail_url()?>" alt="">
                            </a>
                            <div>
                                <h3><?=the_title();?></h3>
                                <p>
                                    <?=the_content();?> <?=the_date('Y-m-d')?>
                                    <?=the_category(' > ', '', the_ID())?>
                                </p>
                                <a href="<?=get_permalink()?>" class="more">read more</a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <div class="page_navi"><?php par_pagenavi($query->max_num_pages, 9); ?></div>
            <?php else : ?>
                暂无内容
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>