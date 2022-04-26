<?php
/**
 * functions for fisco theme.
 *
 * @date 2022-04-23 17:19:32
 */

function fisco_setup()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}

add_action('init', 'fisco_setup');

/**
 * @param $sep
 * @param $display
 * @param $seplocation
 * @return string
 */
function fisco_wp_title($sep = '&hearts;', $display = true, $seplocation = '')
{
    $title = get_bloginfo('name');
    if (is_home()) {
        return $title;
    } elseif (is_page('about')) {
        return 'About'.$seplocation.$title;
    } elseif (is_page('contact')) {
        return 'Contact'.$seplocation.$title;
    } elseif (is_page('styles')) {
        return 'Styles'.$seplocation.$title;
    } elseif (is_category(range(3, 12))) {
        $cat = single_cat_title();

        return $cat.$seplocation.$title;
    } else {
        return $title;
    }
}

/**
 * get category url
 *
 * @param string $cat
 * @return string
 */
function get_category_url($cat)
{
    $category_id = get_cat_ID($cat);

    return get_category_link($category_id);
}

/**
 * get page url
 *
 * @param string $page
 * @return string
 */
function get_page_url($page)
{

}

function par_pagenavi($max_page, $range = 9)
{
    global $paged, $wp_query;
    if (! $max_page) {
        $max_page = $wp_query->max_num_pages;
    }

    if ($max_page > 1) {
        if (! $paged) {
            $paged = 1;
        }
        if ($paged != 1) {
            echo "<a href='".get_pagenum_link(1)."' class='extend' title='跳转到首页'> 返回首页 </a>";
        }
        previous_posts_link(' 上一页 ');
        if ($max_page > $range) {
            if ($paged < $range) {
                for ($i = 1; $i <= ($range + 1); $i++) {
                    echo "<a href='".get_pagenum_link($i)."'";
                    if ($i == $paged) {
                        echo " class='current'";
                    }
                    echo ">$i</a>";
                }
            } elseif ($paged >= ($max_page - ceil(($range / 2)))) {
                for ($i = $max_page - $range; $i <= $max_page; $i++) {
                    echo "<a href='".get_pagenum_link($i)."'";
                    if ($i == $paged) {
                        echo " class='current'";
                    }
                    echo ">$i</a>";
                }
            } elseif ($paged >= $range && $paged < ($max_page - ceil(($range / 2)))) {
                for ($i = ($paged - ceil($range / 2)); $i <= ($paged + ceil(($range / 2))); $i++) {
                    echo "<a href='".get_pagenum_link($i)."'";
                    if ($i == $paged) {
                        echo " class='current'";
                    }
                    echo ">$i</a>";
                }
            }
        } else {
            for ($i = 1; $i <= $max_page; $i++) {
                echo "<a href='".get_pagenum_link($i)."'";
                if ($i == $paged) {
                    echo " class='current'";
                }
                echo ">$i</a>";
            }
        }
        next_posts_link(' 下一页 ');
        if ($paged != $max_page) {
            echo "<a href='".get_pagenum_link($max_page)."' class='extend' title='跳转到最后一页'> 最后一页 </a>";
        }
    }
}