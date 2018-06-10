<?php
/**
 * Class for admin notifications.
 *
 * @package JMW\GermBlog\Admin
 */
namespace JMW\GermBlog\Admin;

/**
 * Class Notifier
 *
 * @package JMW\GermBlog\Admin
 */
class Notifier
{
    /**
     * Notify the administrator that the theme autoloader cannot be found.
     */
    public function notify_missing_autoloader() {
        add_action( 'admin_notices', function() {
            include get_template_directory() . '/views/notices/missing-autoloader.php';
        });
    }
}