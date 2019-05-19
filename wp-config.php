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
define( 'AUTH_KEY',         '|deYWISX%?Vs{0]_IH6PTGN)*2:N0e90L=>cxM+6qKx40^?ri~yTS5LV&]ZX?(v/' );
define( 'SECURE_AUTH_KEY',  'U]$1@4D%.Vl~.;!fDj:5l3TH3E3`XjVa,^in?$~(*6wu{!tSa=r:n1#mMmht%xBh' );
define( 'LOGGED_IN_KEY',    'JID}f]yK6%jjL94O/Edw}Ii dA& ahAsH`,2Psc`tK@>tz/5PDb<]R0Wx173f4OS' );
define( 'NONCE_KEY',        'Z_Z]$USpsEhga@1/H5v4$2@<XR|C`y5uhl9TSN38[g%(+5@HmxGqi;-[[@`t^h;h' );
define( 'AUTH_SALT',        '&HW^#8Q-`le:B[O<~Xl|.LJDU4!aRtIDc=E@+h?&o>hN_tnRw;KQVez7!|p6Uo~W' );
define( 'SECURE_AUTH_SALT', '|(tRf#;v4HV#8^@~a*%Ph=?5I}Gc@`p+e2ZuF/k{WKYc7*WdhHRBxVdF5,4s*NSN' );
define( 'LOGGED_IN_SALT',   'Ou,1viCFBa1D~9V*`<mY[Py]#>j]M@0#RX%gLU;g4/< aJn0C/HKwnFVuL0JyaKR' );
define( 'NONCE_SALT',       '13@/WVB:(;6HoM<;4yWH}65,Tr:Ym)jJC8_B%y(6RYpH`wg>th66,3/5N_+-v0>]' );

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
set_time_limit(300);

