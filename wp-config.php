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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'jI_MnvB}d4t;KL#WrC25%MJB(xzhsu_FUeO9sXUc-,mg;Y4 yi|r~SFB3JN-,=]:' );
define( 'SECURE_AUTH_KEY',  'zK}*=t#Tgv+!d@1lrMI1kZC??gbH30FitCVMu?[+,,|Ia7BFup}u6%TQAx-py=IB' );
define( 'LOGGED_IN_KEY',    's&pLS%up:oA-Z;`xzmf#/O-R&H/p}g6#9NTTi2`Xd?|+MtU45^k]e|44XRU%,z`:' );
define( 'NONCE_KEY',        'Ng.H?^%mofNPJ^RB^%79Ov,*.j2.[(t;8)1Q{d$,`QQ[g+NTPnc-h3)]Y)A2Ll2:' );
define( 'AUTH_SALT',        'L$|JR2=`|ACHs5QzWM-5RTkP?hIOk^*LM!|N}H7_SW;^*GN! zu{qBbl{$Pjq%w}' );
define( 'SECURE_AUTH_SALT', '|w@nl[ZiK@3W;1]@J=h~pP0we9]R4&J2Y)P]r}e*0|*o8[[=*dH[u! P;~yZ!M9E' );
define( 'LOGGED_IN_SALT',   't,+0q<i8Q(>(=,;ba-X{2q6d58+]:y~f#0f21R^n4ha+)74UFf#Wi=J7@ O<^IL-' );
define( 'NONCE_SALT',       '9]47S205ou+G00ctwX3z4D+g)0r?zTie9@1p5Bn6y>1.4,t2KI>x<vF<TP5j$&2H' );

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
