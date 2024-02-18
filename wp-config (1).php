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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_35995685_wp417' );

/** Database username */
define( 'DB_USER', '35995685_2' );

/** Database password */
define( 'DB_PASSWORD', 'Sq0X)1U0)p' );

/** Database hostname */
define( 'DB_HOST', 'sql101.byetcluster.com' );

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
define( 'AUTH_KEY',         'nsetyiwtild49k37prb91ohkk9hhykblcts533o5ohfe7gucutlfsvabbfw83kol' );
define( 'SECURE_AUTH_KEY',  'g5qmq16ja23fgxoymkjj7iusqhohqyifa8xrmb1oxs1auihd2h6tgdrmqgllarwg' );
define( 'LOGGED_IN_KEY',    'i2phrnwghko7qys1ybtnlzsurheyzlnslwwxwlzlscvbwighasj5pzntgmi1yiup' );
define( 'NONCE_KEY',        'kftmefatqrx3nqou68feaqyzrckv146zwd8eqijnbb5i0iwlp6ajg4um167gfi3z' );
define( 'AUTH_SALT',        'uzbskl5omln7sjna6f2q3ran4tjw2ld8s2hagm1ytcsqfyhbcrx4tmx3ruxp6mt9' );
define( 'SECURE_AUTH_SALT', '4wrjzbpkxrv3belxdrqt8lyevfr3j0sy349j0h52cfozsddnihlf65f4exgivipu' );
define( 'LOGGED_IN_SALT',   'bqskiqvqr7ebr4yli7grqv8nabiht3g5rp5m9hcsmvsh21djhzesuwwuddye8s7k' );
define( 'NONCE_SALT',       '8iaccynzgqdixkana26ruiasp3wc090f20p5cjedlyu5oiw82g3uq30j9mzxlm7i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt9_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
