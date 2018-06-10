<?php
/**
 * Bootstrap theme registration.
 *
 * @package JMW\GermBlog
 */

use JMW\GermBlog\Theme;

$autoload = get_template_directory() . '/vendor/autoload.php';

if ( ! is_readable( $autoload ) ) {
    require_once get_template_directory() . '/src/Admin/Notifier.php';

    (new \JMW\GermBlog\Admin\Notifier())->notify_missing_autoloader();

    return;
}

require_once $autoload;

(new Theme())->run();
