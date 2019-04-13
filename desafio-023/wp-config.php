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
define( 'DB_NAME', 'Desafio-023' );

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
define( 'AUTH_KEY',         'B^RihzE 1VRO4ik?;+[CJyQjnP7N`*tlE!orCW+h.@L*<lgtb.VOXFEbR |4mt~#' );
define( 'SECURE_AUTH_KEY',  'xoeJ]r{SYTF#Z%Y$$?qE P6;[PPxjlb3mo]XW)QaTr%q|e${#qVF#WjRu:V;7Wf%' );
define( 'LOGGED_IN_KEY',    'Szgp&dfB%V|bX 3,?E(B$kjHQ)O#&?TDzlJH>m/zpE+l=`gLNjiWIQuiKZJT90t?' );
define( 'NONCE_KEY',        'Sgw_8{kNf*a&YQD.$Wq$af)Xtr-Ji8Wv/4RKWE~G}<T?y(i^i8t)VKm^WRTD02l$' );
define( 'AUTH_SALT',        '#.?1G#6{:RCd}8@;T}CoQ$hv@~59IjQ}[>t9-jQ|87Cc/_VRc.8D_>([#WD%~;MR' );
define( 'SECURE_AUTH_SALT', '_-!b#~gpRDP6.GaaYw)Ns-uGqcCuYHcu~M9pVk_}9D=2$jk7(-AIe0M8I4x-Y._?' );
define( 'LOGGED_IN_SALT',   'HO5t[4oM7?nIA+D^!6}qaSFk.1o20vC!P^@&6@<fca682b{GaHPU%+f6x4?[rE)(' );
define( 'NONCE_SALT',       ',Raj1snC6x61VeE40CKE.Q~L%?R>w1G*:|]n(aGBu%G{aV$|Z/CT BzBj4Kac>61' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

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
