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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_db' );

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
define( 'AUTH_KEY',         'zSd*q.h%St+{,F,Wugll&`BlK(*u(]x=+74+-n@HFA:&FeWsgfaiQavE>0|s=q<)' );
define( 'SECURE_AUTH_KEY',  '-ep2<|IuWt7F@[HBd$r7Rkk@#Gx5F.[#08LzDjXm@$K_,@1t0j^,NJIhk+2|JKCS' );
define( 'LOGGED_IN_KEY',    'YHOreyX0lD0<=rGyN)T`vDnM;%Br33?}b0(>^)!Devz[lkA*Bp;)=uw_J<hz#E._' );
define( 'NONCE_KEY',        'r2^3~C/|q4*;q,)T+~qf*9YK#R|W6L`%6F2A+ZYb/p-|*x+<Pl&<]?dzWMW8}q_h' );
define( 'AUTH_SALT',        'XdhJgVLUa j|u<>t~i-DFWZL8OMg|^7UqT,we3mm~/Shx63gvLPj&umhukN&F,Sn' );
define( 'SECURE_AUTH_SALT', ';NNKMD;LJca)GiCTafra[Edxl?rN|XhpS7)b#t}Vr^Y^FXRNifgzlEjeRD9EatsL' );
define( 'LOGGED_IN_SALT',   'qA:G)o^){yPFSe[2>TJ]?4.teG]L)j&n@-S#X|Pj0j{!&B(`X$]l>!Srt(OY>JIu' );
define( 'NONCE_SALT',       '&mE]M.A<<Q1$=_;D/JwWx<uyj{2.>M#rH>^OB6IC).zjU{tTWlwUXI#Nl!9~7#Vt' );

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
