<?php get_header(); ?>

    <div id="body">
        <?php if (is_page('gallery')): ?>
            <h1><?=the_title()?></h1>
            <ul class="gallery">
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache1.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache2.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache3.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache4.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache5.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache6.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache7.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache8.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a href="gallery-single-post.html">
                        <img src="<?=get_theme_file_uri('assets/images/mustache9.jpg')?>" alt="">
                    </a>
                </li>
            </ul>

        <?php elseif (is_page('contact')): ?>
            <h1><span>let's keep in touch</span></h1>
            <form action="contact.html">
                <input type="text" name="fname" id="fname" value="" placeholder="name">
                <input type="text" name="address" id="address" value="" placeholder="address">
                <input type="text" name="email" id="email" value="" placeholder="email address">
                <input type="text" name="phone" id="phone" value="" placeholder="phone number">
                <textarea name="message" id="message"></textarea>
                <input type="submit" name="send" id="send" value="send">
            </form>
        <?php else: ?>
            <h1><?=the_title()?></h1>
            <img src="<?=get_theme_file_uri('assets/images/photographer.jpg')?>" alt="">
            <div class="article">
                <?=the_content()?>
            </div>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>