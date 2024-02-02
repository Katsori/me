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
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'ujsAg9@xmTOQH-#oZJ8@1VPTL8~|}kH]Ae<=Nr/zT6cQx{b<9kozeFX`NFZujO_y' );
define( 'SECURE_AUTH_KEY',  '+y=;tfy]p:A3(w&z6<~3-VHO7lJ088E7yz1gt$OEPlxr&98#v1WY*nml`bGqc *A' );
define( 'LOGGED_IN_KEY',    'kd~JPLRN$aM>ne#&0}pm}r`2}#r8GZVF;/I%=8>b~TS&xqU?)^+aEMQL=kHncnTY' );
define( 'NONCE_KEY',        '&P(tR+Hng{8!P>IDU~yCm!]/P|d/XG^pUjs(~*F3K]`g&t|c%7YW}atuCYP@I`7j' );
define( 'AUTH_SALT',        'N)l=`~gC)J1ljy8nA<#jbPp~wX*W6k,?z7VgsL}xLxUS|qT}c?}h2(1zvg1>-$J}' );
define( 'SECURE_AUTH_SALT', '.<FH}ZVAx Zu`D@V6YxqklT*Wzs=UOD_8ihXBFmqbFWz 1ajlGYYrqbM0NFh70QI' );
define( 'LOGGED_IN_SALT',   'jCM0Cgy!+&yK@`|6lu04]dt;DkXtvlchc<ZKz}.gc_~~e@ it#|kR`9dSwS[N=_3' );
define( 'NONCE_SALT',       '4|y0&CdXxH={5A#n7FV!0W=.R%`/fcJ7M4sy+)E&^RWmv}?n:,~A[s;Ocwl``>Jk' );

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

define( 'WP_HOME','https://katsori.github.io/me/' );
define( 'WP_SITEURL','https://katsori.github.io/me/' );

define('FORCE_SSL_LOGIN',false);
define('FORCE_SSL_ADMIN',false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
