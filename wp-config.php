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
define( 'DB_NAME', 'w-sinonjs.org' );

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
define( 'AUTH_KEY',         '[sv7:BLMcXr?TKX.H}iH^tx{;(m6.+mbv<M3-?EJo6>N(} nB~ee$FGyv6h}AZPB' );
define( 'SECURE_AUTH_KEY',  'mS=?[oTh[+zT,Aib|2/Ei^VHO^&IeMZuChr@1!t8@QG,U%et ~p$04[[%R{ha,i!' );
define( 'LOGGED_IN_KEY',    ' mD-]fWz.|u^?2AVB*~.a{L8i+g?Q[&3Cp=S;m/D8,%p-E|mknZ/3^7b QHa?e^g' );
define( 'NONCE_KEY',        '!6@dq$6#OrMJ]Hvo_H8gwoOBw*eA6i-q[<J`8(QH2{a$~T~1~UJt0f4@/eG .fPR' );
define( 'AUTH_SALT',        'IxD=7$q>ySv_*Cp/<7sj!OiQr}ORt|fBeS|vWM{tE)CINH;4>;wD#EOR~td)9!I:' );
define( 'SECURE_AUTH_SALT', 'KpJp%zG97bt#qjcuO6bE~&`E+h&O6PSbxd)&`^VNL2JfteEe7$&$c {~H*LYoeL5' );
define( 'LOGGED_IN_SALT',   'S!z6-WBC,|uTg#OrzgN1KF-d:z_pD|mOU!b:qXEzD:n#?7EWh>E]WxWOZEj~^BB!' );
define( 'NONCE_SALT',       '@P2gO7pq~fN{</wi0DhQC(u&dq/v`o!LyH!]d>_0(@^E;t>D8B`|?wo, *DASA~4' );

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
