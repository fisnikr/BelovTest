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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BelovTest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'En1DyNz7iSuhpOV8c43bL8QJG9uoxh936Gm5MESNMi4eVAvq0TAw05HNI5QBFrzR' );
define( 'SECURE_AUTH_KEY',  'IvUdvGhIByig641yayOx3LrVTu003pWZNnGF6W87ffAumcBy7PKd84Ab6wp80Y08' );
define( 'LOGGED_IN_KEY',    'uaLaSJprrkzTOkYm6pCz1xLqBCMGsHKpMHaCQMDkHZqB3WPBC76CTLinf6pvsZfI' );
define( 'NONCE_KEY',        'pYjse2LdxnNuoG8ifhbsGG2d9pk892TtPrFazj80awSzNuqgPEEpdirlCNuRcDht' );
define( 'AUTH_SALT',        't7d2cTuPR3Bt4VcJeMXOXkDqlLZSD0Hqw9YLTBnsDuoOd7wnNAO6bhlJZf4mFaRJ' );
define( 'SECURE_AUTH_SALT', 'ExvTKmzinlZQO4dEZUXEPtA4dFMWW6bhSM7qMEof8S1mjL9ZvUzFNIZwkr73UAYv' );
define( 'LOGGED_IN_SALT',   'Z9u7h5SNaVkbpgpH26IlpZvXVesUw31KiQfFEpoDC4eKug8cUuzDYX67UMfEyC3p' );
define( 'NONCE_SALT',       's4QAqmy0b9fU6lwfQSGwAZLiimhbUOu9mQdZ8U0w8EwqkPCS4tauNEW6sQSqXyDQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
