<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 1/30/2018
 * Time: 8:48 PM
 */
if (! defined('DB_HOST')) {
    define('DB_HOST', '127.0.0.1');
}
if (! defined('DB_DATABASE')) {
    define('DB_DATABASE', 'csc364');
}
if (! defined('DB_USERNAME')) {
    define('DB_USERNAME', 'Maverick');
}
if (! defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'Maverick');
}


/**
* FS_ROOT is defined as C:\xampp\htdocs\public/../  which equates to C:\xampp\htdocs\
*
* FS_INCLUDES is defined as FS_ROOT + includes/  OR  C:\xampp\htdocs\includes/
 *
 * FS_TEMPLATES is defined as FS_ROOT + includes/  OR  C:\xampp\htdocs\templates/
 *
 */
if (! defined('FS_ROOT')) define('FS_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/../');
if (! defined('FS_INCLUDES')) define('FS_INCLUDES',  FS_ROOT.'includes/');
if (! defined('FS_TEMPLATES')) define('FS_TEMPLATES', FS_ROOT . 'templates/');

/**
 * These constants define various locations on your website from your web browser's perspective and will
 * be used in your HTML to make finding images, CSS and eventually javaScript easier.  We never want to
 * hardcode paths into our code as they may change.
 *
 * WS_ROOT is the root of your web site.  In our case this will equate to http://localhost/
 *
 * WC_CSS is where your custom CSS files reside.  The URL to get to these CSS files would become:
 *      http://localhost/assets/css/
 *
 * WS_IMAGES is where your image files reside.  The URL to get to these images would become:
 *      http://localhost/assets/images/
 *
 */
if (! defined('WS_ROOT')) define('WS_ROOT', '/');
if (! defined('WS_CSS')) define('WS_CSS', '/assets/css/');
if (! defined('WS_IMAGES')) define('WS_IMAGES', '/assets/images/');