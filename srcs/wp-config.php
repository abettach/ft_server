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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '+k2O5@6onHqjOr/-XD=-^ZEu:v+#kY$)FpxFLA)++<iuqe%$[Dm$:8LEP94EOO0[');
define('SECURE_AUTH_KEY',  'Cv+D<jK|Yg.iM.rO1mn(~dD)+/5D}H+>kD20g,(.8QtxMT.q$;`{|=-mR`S7?Aa5');
define('LOGGED_IN_KEY',    'GJ,sxK1Eg-JcG(c0XrhaEd_pyCq2nZ,1rj>H++>q7[Ot`(3I&wkIjOM-FdK3o];t');
define('NONCE_KEY',        'i9RdOKgJ^<A>2yKGa,][}<aPY;>QV^f|^|YP/Bclx#og.}*rN^GR)m3Ih8ZHiGy2');
define('AUTH_SALT',        'PyBC&oX23PdjgY_:{RIYWQk7cI>VFi4FBw:P2q}rhjYZ;HKAL=0i*T5jv#nuJtQv');
define('SECURE_AUTH_SALT', 'L>CFA-A<0ON!<}/@~MQQ9TDEC1rMIuii;pPvGcT`]&+WCFgPH,)fkBx+-3tFA XV');
define('LOGGED_IN_SALT',   'T0S=cSr+9mhuo91%H#1^Ugx,<aoMW{ENyP<<s1WzgP7$esoPm#_xd,Z[/:{;O{,U');
define('NONCE_SALT',       '2g@aJgV{mcA:E;~MSNFItokXf9$TG!O~?7_2^VX?)9izu=QkNcS=|4n}Zjb.Ueq?');

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