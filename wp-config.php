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
define( 'DB_NAME', 'simplywp_db' );

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
define( 'AUTH_KEY',         '}0]yHZ_]Ldfn@Nb.</ tR,T#lB&}{} QLPH[.m?S>*g+)]L{z.+OZbE.4/QTE3*|' );
define( 'SECURE_AUTH_KEY',  ',zD |N7_5#Y7EJ]m]0F#[_[T}O$Y/TkuQD#|PbA?:( :_Y%m/bOHa[!-%mYi]I2y' );
define( 'LOGGED_IN_KEY',    'FcNo,O3jN5~o]=%dzd4Ffsu+DlGa{O@)O]Xp47HlPPO:$A+X$w {(-T}v~${FNcf' );
define( 'NONCE_KEY',        '`2FZJlmfCC3R}73~gY_TO0ovV,-:j[-lznOg ?oRhbIIvI0ZVXY)`,|d$G>)`?_I' );
define( 'AUTH_SALT',        '=&c.]!(.hYBsmJ6I<u`KlhcOaA1c<04cVL[28y0ZZOvRsdIR5<sNkHhJ&0h9K&bQ' );
define( 'SECURE_AUTH_SALT', ':Pm=YZ)I7u$hxnEhFy{<}nY,B5M4@-yC6<Ni@}=b)k.~aQ2{U=KZPb?q5_7x|mgf' );
define( 'LOGGED_IN_SALT',   '.-kjDVPkCN$R9*lnHmR[oZfUaR08xX |/6~<*4.qu&SXuR)N<ur*1$fVom|(I3i*' );
define( 'NONCE_SALT',       'hw>h1Woz; a4A +k[Jn]5nM;h8v]b~CU@|n(Q~/.NMk2<kGN}g,]qUfmzmFO:LTv' );

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
