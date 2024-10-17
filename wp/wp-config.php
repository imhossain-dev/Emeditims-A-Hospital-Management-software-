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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emeditim_wp984' );

/** MySQL database username */
define( 'DB_USER', 'emeditim_wp984' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@LS1l39y!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'chlbi8cp64sfh5ix2qujwyfaihgvloan6bvxgi6ahdn2nmmviygn2wxbfnhru6qg' );
define( 'SECURE_AUTH_KEY',  'd8dvptu3nnxz2hfgajyykumfezrheflepgpjqf2d9d8du8khpaxfkusty51dt4xk' );
define( 'LOGGED_IN_KEY',    'xcr1jb1cseozdw9hbn1ea6blb7wcgrh2fba9wa4uwldc4boa7i1umrevoomaypbm' );
define( 'NONCE_KEY',        'c3dd3ozaxop2mawlczakjoyymmog5nn9uhnehm8fhvbivrcfrmgerg3hwfn3zy1z' );
define( 'AUTH_SALT',        'z0pfnsflfpiuxmnnfwpkdnahgnacfql2pctbeogijbpoya9vcj7tlg3nux4gbado' );
define( 'SECURE_AUTH_SALT', 'ajtcqqsuilapuoso7y8yutbeajefuilj9bibkzhqdvcnizxl266lvg5ivgvylhie' );
define( 'LOGGED_IN_SALT',   'idc9ms9vlrkhl7ck6ttlvdchj7w1duwqpxhbuchk5byphfzijzqq9meofbldno5e' );
define( 'NONCE_SALT',       '4pchmrzz7ugtmoy7dnczeccqbimks8kv2tpaixvipfwyyapynkuyud24nwlxxuvi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpio_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
