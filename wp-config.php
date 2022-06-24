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
define( 'DB_NAME', 'fondofer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'q;YYlleE_2Z-/NVSt;ff3kAD<GVUyTB+o ;J]g[].v@4uW,sAH$XlW{hoaKds94@' );
define( 'SECURE_AUTH_KEY',  ';*qJ/2zb~M!e{05W({.&t.+db!E]iSpdFe>/[GUPYDF9aFHBl~%NC;LdU/~9X=$a' );
define( 'LOGGED_IN_KEY',    'AlNqU`ql1h_KqFi:OH2O%Cql D[VF),,SXEPsyZ(>d6Q;!;%JWhie$!pjJp}{4UA' );
define( 'NONCE_KEY',        'U[P*x1w:{ KQl0>,=s_me3t&y|*;K^5Oifr9LJ4V~fGgN4E#>~>dPF1@q:#uRYxR' );
define( 'AUTH_SALT',        'b*!STHuZ@6*q=%dgP#Nl.GC#2 GHk= Y/#,w3~j&?j~_75zBsxXPO[_T0erR>9r9' );
define( 'SECURE_AUTH_SALT', 'xVt]B={S&Cs2$Ln%Y?5w7xHy#Q8BJP<0Z4vz4,!n(ILC6|t//q8rQ[c$2G)Et3Iv' );
define( 'LOGGED_IN_SALT',   'wy<p.&%oWpTfM()oqJ!#U{hGP#qq.IriAK_z{I.[;^SqwCf999:)~{4JJONcis]F' );
define( 'NONCE_SALT',       ']v6Jl4p~aSs.272ur}j~!;;:ay?y&rD(^?Z+$?2bE5&?GTeQRd!v#@Iwl>b>T?m>' );

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
