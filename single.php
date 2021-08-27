<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();
    $context['page_for_posts'] = get_permalink(get_option('page_for_posts'));

    Timber::render('single.twig', $context);

    get_footer();
