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
define( 'DB_NAME', 'site_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4R-!Yq[QXpz$)IyQ*Z+GK:RHf$mJHTwrY*DNyFZMRP&MS{qPN95O5=sxlE1v~IbM' );
define( 'SECURE_AUTH_KEY',  'a4j=Nq(u{(Ma$H&d<E}q75~{$28oAb/W],3]/<};q0l1O*C;284mTL<fU<B!f.3G' );
define( 'LOGGED_IN_KEY',    '^.:TVSh+B,EZbQ(U_f.ji{VHYe{oK)a;oR:v*o-|!@PBrb9tAi6d`ma,.y-Y}mZS' );
define( 'NONCE_KEY',        'FnW?pN!msUt?#X;kj$lV7pd)iF42SA&34+NMiv9AA<mU<w[z|y*HEYkL=U5n(9e8' );
define( 'AUTH_SALT',        '<O}I~i$][ E>4AUp7A&^aO1.>d/sk1VnnT;xK!rKcO3mL7hXvl|Z2r~(tP5Vp6_%' );
define( 'SECURE_AUTH_SALT', '?kzyV1)&[,}UhN$N1w 23&~ZX&VkHpfs.h$LTATFN^*IT})9$)KEWodb!+>{)<@^' );
define( 'LOGGED_IN_SALT',   'R]3%(3|z2rX?Q=EC*f7$}krZ_}!.LG+V?4=*U$ko,}5ngIHqWvcCPr3!{^+ei)n6' );
define( 'NONCE_SALT',       'gSOV_*ZP|eP7+-C.BdXj}7~>9/<yLjVa}yVLL_i&)jNS[a{AM-P_W<r><BMdKoE8' );

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
