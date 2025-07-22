<?php

namespace Starter\Theme;

class Assets {
    public function register() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue() {
        // Enqueue glavni CSS fajl koji sadrži Tailwind
        wp_enqueue_style(
            'starter-main-css',
            get_template_directory_uri() . '/public/css/main.css',
            [],
            filemtime(get_template_directory() . '/public/css/main.css')
        );

        // Enqueue Alpine.js
        // Postavljamo ga u footer i dajemo mu ovisnost o sebi (što znači da će se učitati prije main.js)
        wp_enqueue_script(
            'alpinejs',
            get_template_directory_uri() . '/public/js/cdn.min.js', // Putanja do kopiranog Alpine.js
            [],
            filemtime(get_template_directory() . '/public/js/cdn.min.js'),
            true // Učitaj skriptu u footeru
        );

        // Enqueue tvoj custom JavaScript fajl (main.js)
        // Dajemo mu ovisnost o Alpine.js kako bi se osiguralo da se Alpine učita prvi
        wp_enqueue_script(
            'starter-main-js',
            get_template_directory_uri() . '/public/js/main.js',
            ['alpinejs'], // Ovisnost o Alpine.js
            filemtime(get_template_directory() . '/public/js/main.js'),
            true // Učitaj skriptu u footeru
        );
    }
}