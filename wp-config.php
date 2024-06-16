<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'cnpm' );

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
define( 'AUTH_KEY',         'OG$V.` ^MP8.uV<Y900Gy^HVDJ^^:czsZYNW{)Y8|toO,_C,]BrB#4FyD=_JAJLc' );
define( 'SECURE_AUTH_KEY',  'vLFW0q?XY @K~gmrn]unhsPO=pzStA5JC~fHY32:xsZDOL31VMq5M[d1Dn(#}M%}' );
define( 'LOGGED_IN_KEY',    '-;/~#YL]OoXxs.[$Mmmn3;]&?WA@^3M8sV|n+GRcw[GDEGo&}/:xLg 9E6J]%=ft' );
define( 'NONCE_KEY',        '+Diin~}%_r[{>pCv8.3pxY(u-Tk>HH(4x32MGL0q^lvcXDMQey/5]][t)>;$XM/)' );
define( 'AUTH_SALT',        '3ol1r.ng/9zAe>.2$Kv#$0%vwmAw#r3G]RFLd06@5.c;9e4jOkUZNcN]e|rMIm`.' );
define( 'SECURE_AUTH_SALT', 'AsCH)G*O[Gy!@p%LL*HbZ>1!I>7_n-;-Hqu-]z4QZuO9co)SYj)2^9#4ZCsd8xMQ' );
define( 'LOGGED_IN_SALT',   '7~`Ks2rIT?5)+>.J_GH3T&F{]K_a0iF~onHdEY<r}*ZRmC+3cge`VZdHN{SYD+%I' );
define( 'NONCE_SALT',       '| :o^+yr&2p[M>4cVxhU;n;p!X-C;>^m]1--6*o}p<?DO;Yg93B*(z6=W{$_rQBU' );

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
