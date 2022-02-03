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
define( 'DB_NAME', 'apiwordpress' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '@!+rczsu9?`C#6BiXZs(s_t-)<]i)cPBmRq>cL]w!/HP^!+=z2,=x_YwqGFD9ZOZ' );
define( 'SECURE_AUTH_KEY',  '>xLOwDd[/bT4t5V6f~o32Nn*Na:8; >ujdgW@(E=hV<]DoJM:Fq*4BP:5$=E*>jx' );
define( 'LOGGED_IN_KEY',    '(T[bgC#IbJEuVZd[ct<pp|<8gi5(+4X|Xj):/wAn]SMd^z44h)Ao+CW<O0:!-Ja ' );
define( 'NONCE_KEY',        'J?3xRuuHK~F=Ie^P23H5xgn3qH?`#Tqvq3o$n%2blFYUh18fna1}l~^*Y$-{9j@E' );
define( 'AUTH_SALT',        'c]ZUwqo<!::hxu1X.5ilf,@|6mMg1qyQ1K{-d^r;7r8[,Y(mcLV`^c:{(k-u>PPv' );
define( 'SECURE_AUTH_SALT', 'K{2}PG*2Lt@XfTuZPm`t|?H.RMwUT/ylcYb7sq~3YnPgmbR(hD?8ov<B#V>:%ZM?' );
define( 'LOGGED_IN_SALT',   '.]}eCXF#)%lOk]6#C~}sXXSHBgMQZ+W%p*NO51z7tYkO_VuJcJx0Sg-EE,@8ymiO' );
define( 'NONCE_SALT',       'b^!f8IUphNd1{K)oKx=8687pbp3s:7-=.7.CI$rnslsf`.nA<YG?T;j&?S$G-_qD' );

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
