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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jackis12' );

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
define( 'AUTH_KEY',         '~lGtbO[r!%d~@/QLDDQ8a9du@(=cw-|{lU=FoArmkQ&=^KHFl_?P,h_;?aP<n(@i' );
define( 'SECURE_AUTH_KEY',  '}!q_/[?7Kz,R/AZR3P=y;Lmf>?P]c?!8W*{06y)8Nf~hApv &{r5(u)Z@E</oK1y' );
define( 'LOGGED_IN_KEY',    'w1T@BC+WAfN9a]9]_U[h?R4`t]f93*l%.eWX>M!#^t?WWqNR)~pz=!2Ywl7L<z|p' );
define( 'NONCE_KEY',        'RmJ-kZ~pmz2v>!!<-hB793}dNu-Wp:PFbI2R4:Q4&<aCY6 i2$&%e#YNpmDUus+4' );
define( 'AUTH_SALT',        '4u>[E;2!lM>F;Z=+dCIRAU;N@8<jd/y>gRvKdy[^xt)EB:H[1$)wp5MJ?Wx)f,Bo' );
define( 'SECURE_AUTH_SALT', '!,z8|7aU2`DtdUWfurPA9G%N#%aQ&u:z&y>%o qHzTH)(o0/!|:I4+LPKevNjELN' );
define( 'LOGGED_IN_SALT',   'pHocY)*k*7(*8wkXxSgw[rWctKC]WSI#B_0]`dE@F)j8k ^+!MR>DMle|8DfN_s6' );
define( 'NONCE_SALT',       '{ ]b`U`+$QWrho,WmC?GM1*ap<u Ghkj*DxFK~gwff|qBu!=W-F#$_07=/,M>@%Z' );

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
