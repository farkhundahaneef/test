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
define( 'DB_NAME', 'quizdata' );

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
define( 'AUTH_KEY',         'Ovja0+[mB9`,4&ws!Z?8[P@R><_V_d-&bhwL3lX-.SYj:nIQ^<K)Yj;+JD/0&H|G' );
define( 'SECURE_AUTH_KEY',  'J-WOR!?$iB^tK7KBNPaBPxq=Ns@bD$bX&CNfJ>2uk{^38XJx5&%<eVUkUkG1:R &' );
define( 'LOGGED_IN_KEY',    'm%^5DT4VcELU%K7|C/_g9s5g7rwZA`n6Ck>tCUH,?_5Wm;i2>IpU/vsxF-Sx)0wd' );
define( 'NONCE_KEY',        'AJ~Af/nX5-j[^6H:~,]PN#fQX_4M(y/ PN;*b_[N^.8h(LQZ)U>$*t3QNyi-3_K$' );
define( 'AUTH_SALT',        'Ik5HWIt?kElHKw`ic-S.WX3D{#P/[E(@(9k6H>#vy01na$KYvYL$0iS8@<ArpZod' );
define( 'SECURE_AUTH_SALT', '; Dn74eRFvMyUpkME+8k-b~eehe~zKFKcZ0e!E1 Kzm(0g,c_!v3IX!wjNX)-s2g' );
define( 'LOGGED_IN_SALT',   '{MZS|Mh:Qk./^iF~6R.|ihJZ1EFijAq5=pbYi{BWeI.{0mk@Js>MuZc^sWtPYr[_' );
define( 'NONCE_SALT',       'Hm_[2>`;vLjL|S|0{cZd<5j9[5QO?T{@aF]:6$&vOBeFjV$eNL2.0a)6t7ijX,JY' );

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
