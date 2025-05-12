<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '5ujlDWKBoRy8paoHLXItvOsHJNO8+ZuWwknRX+J/Z914JUAmyRCGC9i5qdRxJVXLbRizTuL9pf5QV1ejIe8LwQ==');
define('SECURE_AUTH_KEY',  'V7Y0GiU12w2tYahK2yg8VEBqc6aGBe86sKIxboGr0ftg8G7WVfLYVRk5v7SEN/ShfizoslG7LkI2HyleVVT01Q==');
define('LOGGED_IN_KEY',    'nA/wy+e1ADs0OYZVuWcqK8ExqAXVFiGhPwJFO0FkUD3+32dnVn/aTQaxBrRi0yYDliF944hMtXxgq1hFfrHaCw==');
define('NONCE_KEY',        '3gQ13IJr68fOn+4UTbsLMRVViXI7c7nmhGazwJcu+ZTIyTWE+olX6xevYRVQYl01OQbLK3QxUiIKc3Af1fE37A==');
define('AUTH_SALT',        'UUMmhPzv6lK/dfKKFlRTthD1HVf3jGra9x3rnfuJnezqtFvcM5mV81j7/gxhcdmpzROrk3hlsKxd+9SbKb0PvQ==');
define('SECURE_AUTH_SALT', 'P+4hJNlgBxDX1EHIKF7oSTzSktlkXn7lCrFCmN0HlC0HNjjIFcMSNwaAQW8g67VgS53zRELUqTUe8d3IJYpjYA==');
define('LOGGED_IN_SALT',   'Glh3Kw6TeaDuUddcGbPHMnxYZlRujzmILWKRNTf5t4Jzmmjz9UZRPuXFQw1QzOqvCVblqSJiAEeJ6off+JBAmQ==');
define('NONCE_SALT',       'emeM0fsOMCxnBceBe20StTElZx+6/dNjik8sWkuvLgOFBT58ZyhffhOhT8NPrjbqGTCxx73oIKwrsUdf/8oyNQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
