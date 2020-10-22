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
define( 'DB_NAME', 'tendenciaberisso' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|O;xq9^:Yw_5LO/-v;TAv5#rcTv=a]J7RNCRz;QzENJZs~.~>QKC;CQ3B`yz<{Jw' );
define( 'SECURE_AUTH_KEY',  ')lB<YU1M@35#{THe2pRAxbV<DwOgbmPiG-&]DI5b-t}f%xI4$K5Q2!]09e0ra^h-' );
define( 'LOGGED_IN_KEY',    '&FH9f#%eT4[%lWQN^b}R}fhU(,5urL2EgGgEbK[aT.;s~gKC4kp`pRijN`[*%=T7' );
define( 'NONCE_KEY',        'g$#rTl)K~M{5z>6`Zvefjgd} =U1rydE`7UP}_:[TQs>Vw|@G)}9q6HsG>@#cfm.' );
define( 'AUTH_SALT',        'EF~j3[;kBMkl`2egxx$8-<>{{9V|*A^.cIyJVH/NS#3};<iU2y1OZOf(x6X3[F{u' );
define( 'SECURE_AUTH_SALT', '$q>{<:v8A|P9i6Ukhf&gzc/=8!4T@5xr=4/:+]rHv~ePGn>c]hoslNj#F.@0$f>2' );
define( 'LOGGED_IN_SALT',   ';Tt)Z+DC$Y%W.?E:X,O^bInN6lo-jS{}xGEZ+>8(S(-T2?7DB&wAu`gv$^V?Uc9&' );
define( 'NONCE_SALT',       '_&wA^CR-7(f4Sb_pRx/+kF{.3p1gZU$B+|?U0p_)vPi~s)d,>,qO?) 8c+k2?+/n' );

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
