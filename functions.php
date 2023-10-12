<?php

  function my_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("automatic-feed-links");
    add_theme_support("title-tag");
    add_theme_support("html5",array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support("dark-editor-style");
  }
  add_action("after_setup_theme", "my_setup");

  function my_script_init() {
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css', array(), '6.4.2', 'all');
    wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.4.1', 'all');
    wp_enqueue_style('mycss', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')), 'all');
    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.4.1', false);
    wp_enqueue_script('gsapjs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js', array(), '3.11.0', false);
    wp_enqueue_script('scrolltriggerjs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js', array('gsapjs'), '3.11.0', false);
    wp_enqueue_script('motionjs', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/MotionPathPlugin.min.js', array('gsapjs'), '3.11.0', false);
    wp_enqueue_script('lenisjs', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js', array('gsapjs'), '1.0.19', false);
    wp_enqueue_script('myjs', get_template_directory_uri(). '/assets/js/script.js' ,array('jquery'), filemtime(get_theme_file_path('assets/js/script.js')), false);
  }
  add_action("wp_enqueue_scripts", "my_script_init");

  


