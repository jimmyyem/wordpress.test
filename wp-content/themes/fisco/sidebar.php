

<nav id="main-nav-wrap">
    <ul class="main-navigation sf-menu">
        <li <?php if(is_home()):?>class="current" <?php endif;?>><a href="<?= site_url('/'); ?>" title="">Home</a></li>
        <li <?php if(is_category(range(3,8))):?>class="current" <?php endif;?> class="has-children">
            <a href="#" title="">Categories</a>
            <ul class="sub-menu">
                <li><a href="<?= get_category_link(3) ?>">Wordpress</a></li>
                <li><a href="<?= get_category_link(4) ?>">HTML</a></li>
                <li><a href="<?= get_category_link(5) ?>">Photography</a></li>
                <li><a href="<?= get_category_link(6) ?>">UI</a></li>
                <li><a href="<?= get_category_link(7) ?>">Mockups</a></li>
                <li><a href="<?= get_category_link(8) ?>">Branding</a></li>
            </ul>
        </li>
        <li <?php if(is_category(range(9,12))):?>class="current" <?php endif;?> class="has-children">
            <a href="#" title="">Blog</a>
            <ul class="sub-menu">
                <li><a href="<?= get_category_link(9) ?>">Video Post</a></li>
                <li><a href="<?= get_category_link(10) ?>">Audio Post</a></li>
                <li><a href="<?= get_category_link(11) ?>">Gallery Post</a></li>
                <li><a href="<?= get_category_link(12) ?>">Standard Post</a></li>
            </ul>
        </li>
        <li <?php if(is_page('styles')):?>class="current" <?php endif;?>><a href="<?= site_url('styles') ?>" title="">Styles</a></li>
        <li <?php if(is_page('about')):?>class="current" <?php endif;?>><a href="<?= site_url('about') ?>" title="">About</a></li>
        <li <?php if(is_page('contact')):?>class="current" <?php endif;?>><a href="<?= site_url('contact') ?>" title="">Contact</a></li>
    </ul>
</nav>