<?php

namespace Starter\Theme;

class Setup {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'themeSupport']);
        
        // Registriraj footer poruku odmah u konstruktoru
        //add_action('wp_footer', [$this, 'showFooterMessage']);
    }

    public function themeSupport() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    }

    public function showFooterMessage() {
        echo '<div style="position:fixed;bottom:10px;right:10px;padding:10px;background:#0c0;color:#fff;z-index:9999;">Autoload Setup class radi ✅</div>';
    }
}
