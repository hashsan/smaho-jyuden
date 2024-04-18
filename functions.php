<?php
// ウィジェットエリアの登録
function register_custom_sidebars() {
    // Header Widget Area
    register_sidebar(array(
        'name'          => 'Header Widget Area',
        'id'            => 'wi_header',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));

    // Footer Widget Area
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'wi_footer',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'register_custom_sidebars');
