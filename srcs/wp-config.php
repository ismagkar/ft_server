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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_database' );

/** MySQL database username */
define( 'DB_USER', 'semery' );

/** MySQL database password */
define( 'DB_PASSWORD', '21semery' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key $
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have $
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6%7 h]cKZ-Ei$*~sfe(aVy+j+DU+2#3|Gsc0y.,q@VRFVPQVR2C?VR|T4=;/mW~<');
define('SECURE_AUTH_KEY',  'o:|z6K,OebmsKZl^HOWmak~%i}MRuJ;x)?>na1tTW9X?uBt0}*eP+@-H>0cG`O+z');
define('LOGGED_IN_KEY',    ')-Oo~F!0A/(LAX/:<|kVi9HoLC!p>mz%pQ5aj|HR{PR[XeW71Md)$}J]m7EIRa*b');
define('NONCE_KEY',        'GdG{~s0+M$C9mMGC+IK-P?#sm.*+<w:ezR^p+{K>Vj2N/}kTg1]1k,8=+eg$~?Hq');
define('AUTH_SALT',        'G{91|rjlLya,`[|8+St;Ed)de<yxC2~hKGYW}? @-DYoU:jKP[a<Q~M_{-|JWMct');
define('SECURE_AUTH_SALT', 'nF_>0:gq*@yuKo:P~m*?zKnc{2;r`L&N8i-  gku(y3S{~#mYDHe%_F:|gZZ?LhO');
define('LOGGED_IN_SALT',   'bBHy,VpKaqjS2`lhovpACK_U&;`|51B-iqLxX{7z!-FtEX;#yLKav,jRgdd=)-dV');
define('NONCE_SALT',       'k@QKY]MtD%j_tCC33B-q>-8APy5$NI*?3?/L$Z2^6Ev;fh|]0?L4p-S%|Tx+P`(A');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
