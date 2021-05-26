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
define( 'DB_NAME', 'nomadsun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#Ehxp{Maie$;l8^`sy)djgu/s*Pt=G.^kaFZI[[tWI%%6_8Vh)F?Lus+[%Ay4n~/' );
define( 'SECURE_AUTH_KEY',  '3r^U`!_qF9{]NSgT#kVS]dP<Wh<PkAqGnEC:3`[M+]w@%LpGgrt,:ZGp46sn}k*R' );
define( 'LOGGED_IN_KEY',    'cZ@!LKb$8;dRL=F9+()HZYf%m%IM?sfk`3F%ytgqp2*i>iIF|{ }w7~_bRnr7PF[' );
define( 'NONCE_KEY',        './3l,$nW30/kh_eN*vTVUqh*$Z^:ErD95Cbm~oeUkB B{#-E(afU<`:^d*<sP t6' );
define( 'AUTH_SALT',        '3~;oWb&Vty`S{$_.jSC,]n^sZ(3qOU dBgFwyx|q:VU>3e;DAh8g:_hqQ/Jx7nS{' );
define( 'SECURE_AUTH_SALT', 'VRf-67gW8EuQ5i-4_Jec%6G%L0M4AGX6zyLvELK(2:v-;G~.FD?LA=s$clL:L,N ' );
define( 'LOGGED_IN_SALT',   '{-m[c4@#OT/c Bhdi!TBN2W?H,ne&E=r4&FH<x|M_0:H9X.V[I1M+XpWs9.poLpz' );
define( 'NONCE_SALT',       'D,l>1?c21b56nMxGRjs4 ]ObVm|NJ.tLJCGvVLg D)U@HMl>>Gel%{H&4vKeM%!d' );

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
