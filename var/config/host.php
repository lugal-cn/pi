<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * Pi Engine host specifications
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 * @author          Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */

/**
 * Host definition file
 *
 * Paths/URLs to system folders
 *
 * - URIs without a leading slash are considered relative
 *      to the current Pi Engine host location
 * - URIs with a leading slash are considered semi-relative
 *      requires proper rewriting rules in server conf
 */
return array(
    // URIs to resources
    // If URI is a relative one then www root URI will be prepended
    'uri'       => array(
        // WWW root URI
        'www'       => 'http://127.0.0.1/lu/pi/www',
        // URI to access uploads directory
        'upload'    => 'http://127.0.0.1/lu/pi/www/upload',
        // URI to access static files directory
        'static'    => 'http://127.0.0.1/lu/pi/www/static',
    ),

    // Paths to resources
    // If path is a relative one then www root path will be prepended
    'path'      => array(
        // Sharable paths
        // WWW root path, dependent sub folders: `script`, `public`
        'www'       => 'D:/xampp/htdocs/lu/pi/www',
        // Library directory
        'lib'       => 'D:/xampp/htdocs/lu/pi/lib',
        // User extension directory
        'usr'       => 'D:/xampp/htdocs/lu/pi/usr',
        // Application module directory
        'module'    => 'D:/xampp/htdocs/lu/pi/usr/module',
        // Theme directory
        'theme'     => 'D:/xampp/htdocs/lu/pi/usr/theme',
        // Path to static files directory
        'static'    => 'D:/xampp/htdocs/lu/pi/www/static',
        // Path to vendor library directory: default as `lib/vendor`
        'vendor'    => 'D:/xampp/htdocs/lu/pi/lib/vendor',
        // Path to module custom directory: default as `usr/custom`
        'custom'    => 'D:/xampp/htdocs/lu/pi/usr/custom',

        // Application specific paths
        // Path to uploads directory
        'upload'    => 'D:/xampp/htdocs/lu/pi/www/upload',
        // User data directory
        'var'       => 'D:/xampp/htdocs/lu/pi/var',

        // Sub-paths of var
        // Path to global collective configuration directory
        'config'    => 'D:/xampp/htdocs/lu/pi/var/config',
        // Path to cache files directory
        'cache'     => 'D:/xampp/htdocs/lu/pi/var/cache',
        // Path to logs directory
        'log'       => 'D:/xampp/htdocs/lu/pi/var/log',
    ),

    // Paths dependent on upper paths
    'directory' => array(
        'asset'     => array(
            'parent'    => 'www',
            'folder'    => 'asset',
        ),
    ),
);
