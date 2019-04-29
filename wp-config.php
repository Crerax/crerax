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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crerax' );

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
define( 'AUTH_KEY',         'a8&p3 kp?%kir(!E/T D>jv:S!:yDPJ(IZ@%tiV%FrN-[Bp|KPVl#q1`OEzdg9OL' );
define( 'SECURE_AUTH_KEY',  '+q)J_(qJF~oRv1(fyF#z0/+J.az@rfQxtJ[:pk,Et*mlT@cv/~g_%oO7-^8D]nYI' );
define( 'LOGGED_IN_KEY',    'iBa53h3+t!wcZm4diFr[lcc@y^=mN[N5[%FMLI!A@~It@MnhSC3g*c7V.{=};BWs' );
define( 'NONCE_KEY',        '$ n ^Jbvl$hfmzA7n32mjVYEbt1oja,[(B::/fl{ G^|pjJ&m9m{vuxp>9F^fsK4' );
define( 'AUTH_SALT',        '=>JVUe:>dMbR2jp*4(C|eiyG:oY/`}#PKD!e|i|;tGn+1/@A=}|=|(TN`*{CmLN`' );
define( 'SECURE_AUTH_SALT', 'Iu)dT[;ZrY7p2Lm7QLux39*H9+Xxc3 ? %A`qfK)JcI;;*Zm;jG)9N?7esIE+$vW' );
define( 'LOGGED_IN_SALT',   ':C;j=Z+wvy^xBzH!/Q;Vn_ugT3-e61i`|(s|8p,OlPv=CH`Fid:ux@7,ouN!sq#m' );
define( 'NONCE_SALT',       '9gTZa?0=aZ,S@afs^>{/!4wyGprt|bzYybj(KtkMr@t%`4HU#Si1i#!6OD+?A9UH' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );