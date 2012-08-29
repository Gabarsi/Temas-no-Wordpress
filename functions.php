<?php

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if (function_exists('register_sidebar'))
    register_sidebar(
        array('name' => 'Rodape',
            'before_widget' => '<div class="span3">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array('name' => 'Topo',
            'before_widget' => '<div class="span3">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );