<?php

/**
 * Asas Virtuais WP
 *
 * @wordpress-plugin
 * Plugin Name:       Asas Virtuais WP
 * Version:           0.0.1
 */

try {
    add_action( 'admin_menu', function () {
        add_menu_page(
            'Asas Virtuais WP',
            'Asas Virtuais',
            'manage_options',
            'asasvirtuais-wp'
        );
    } );
    require 'plugin-update-checker/plugin-update-checker.php';
    use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://zaecss3tjp9agtdd.public.blob.vercel-storage.com/asasvirtuais-wp.json',
        __FILE__,
        'asasvirtuais-wp'
    );
} catch (\Throwable $th) {
    error_log( $th );
}
