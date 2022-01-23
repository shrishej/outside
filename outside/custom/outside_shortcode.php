<?php
function event_shortcode_handler($atts, $content) {
extract(shortcode_atts(array(
    'posts_per_page' => '10',
    'post_type' => 'event'
                ), $atts));
global $post;
$temp = $post;
$posts = new WP_Query($atts);
$retVal = '';
if ($posts->have_posts()) {
    while ($posts->have_posts()) {
        $posts->the_post();
        $parameters = array(
            'PERMALINK' => get_permalink(),
            'TITLE' => get_the_title(),
            'CONTENT' => get_the_content(),
            'CATEGORIES' => get_the_category_list(', '),
            'THUMBNAIL' => get_the_post_thumbnail()
        );
        $finds = $replaces = array();
        foreach ($parameters as $find => $replace) {
            $finds[] = '{' . $find . '}';
            $replaces[] = $replace;
        }
        $retVal .= str_replace($finds, $replaces, $content);
    }
}
wp_reset_query();
$post = $temp;
return $retVal;
}

add_shortcode('eventshortcode', 'event_shortcode_handler');

?>