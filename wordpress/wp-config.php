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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7!]XMR/$mwlK6SuQ;-s[]X]TeutodTj%6I9S*H!iR+S;@&Cpr(!W=&4iu%@U#fDR' );
define( 'SECURE_AUTH_KEY',  '!+oRZ{acLB (Nm?YHQJ)6e%rA`~&W1uYKa;w+u>gC=4],AiIYd!gnmInn;p0IC.>' );
define( 'LOGGED_IN_KEY',    't,:7)Z#L=8UGWNV?ewbTVnB<fN_pQ;ioJ//Y_|fk!V}qG~)uF)~jFfG.g3[O+zd?' );
define( 'NONCE_KEY',        '4l4^?Xob$Dr56RAl4MFh!6s^exE/Af#CN|ASvd#aW}!8N&g7r2>orGo!11$L?_6X' );
define( 'AUTH_SALT',        'HmYPk{]ooa&H[*[TY(es1x?lRb1?U1%AUQ^f6l2!>p6*ZazPM0g+]3U,P94Q3.Gd' );
define( 'SECURE_AUTH_SALT', 'UO0&ikww5$uueHgu|$PPN-XIC5<-hc`t5UpE@3[s7TTY%,VuyE)yIBsU&)En^.Ci' );
define( 'LOGGED_IN_SALT',   'SY.x=ZmKD>t@_op ML-M!G96aOQ-AjK>(ZD14eX H+x[6H{F85hjQ8OuHt%K|CV ' );
define( 'NONCE_SALT',       '(4iKGL Hv*NJHC+ _$I_pGZID]*OWcaQu.HNUiMQERJ^^u`fe_l^,fmZyqNLaf%u' );

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
