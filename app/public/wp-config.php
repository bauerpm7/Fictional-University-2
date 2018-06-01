<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //

if (file_exists(dirname(__FILE__).'/local.php')) {
  //local database settings
  define( 'DB_NAME', 'local' );
  define( 'DB_USER', 'root' );
  define( 'DB_PASSWORD', 'root' );
  define( 'DB_HOST', 'localhost' );
} else {
  // live database settings
  define( 'DB_NAME', 'mich8005_university_data' );
  define( 'DB_USER', 'mich8005_wp524' );
  define( 'DB_PASSWORD', 'Brazil2016' );
  define( 'DB_HOST', 'localhost' );
}




/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sDbBVTVN4cYdkxpsRHmzOOOJmL207PhGDEf0N5z5ThXe9R4GkXk/VI4jxCSuF65jRtvEmvnndoUGxQtVRpiBAA==');
define('SECURE_AUTH_KEY',  'w/KUeIw0uL3eFPTAiLphoZNtTnY00kX9P92JAiBjxNiHkFEY3uypYSO0VUz2aQHizRI2+yPrDSRW6Le/tgu+hA==');
define('LOGGED_IN_KEY',    'csTUklgjT8TZs9qGE52NiTgPSbmSHE5FliQx49ukWEDj0dYhcgSuVNyIa/Rw1Rg8GxXqKeMPYOhs7ci3/aq6Hw==');
define('NONCE_KEY',        'NPW2FSz3PBQzy85dFTzkkE1WssyHtTk3eeuz6IAxmnU2ierz1zZADVeim7LIngCdiEfRIThmAPzN9eUpn/Waeg==');
define('AUTH_SALT',        'YW9ZEWxB4oZQuQRkfStVqsqPXpLwqFj014gTVVb2JC+UlvywiJo6mwt4g3buCv8pulxEjlyXE8zOONNgi69q/g==');
define('SECURE_AUTH_SALT', 'KFR9f9G1tRFeMLx4BdgbIL7ypizqVu/oEheM+q4QDKtFPSz3G7iugqfMyD+wKMb6PI2jegZLA9+eH3RbWnc/Og==');
define('LOGGED_IN_SALT',   '7thdGYOlYcroedtJCJtu7I7VpVpnJ6gaXlZzeTV5Xx0+eLO5uez1Nc4umSdm0G0iM8yYieOuQqAlpPnBzOTuZQ==');
define('NONCE_SALT',       'y8Glymw89B9+Nrd/cwfYBkIJF+iIuZegT7uT2UUg30TND15iKnUtUKcal1xnZqcTt+B9ydyoppZwJVoKxz6l1Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
