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
define( 'DB_NAME', 'flezyab' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'FGFB8w92v(ZQ3LU^]_}z9CIyNgod9VGaC<[lzcXRc&tG[DF%6Bnzs i5C>/1tt/z' );
define( 'SECURE_AUTH_KEY',  'w.Od5 9|^P%.`]&.HIG&B?DVDR[*3sqItt;/+T1R4|K/`z:@g8L=6.NgB5jsQ7i{' );
define( 'LOGGED_IN_KEY',    '~(g{4N=Jug[$k:WSl(ZY7vS^*:!x)s#}6A.U-5gd)KK+/.K8,,:-ori9a (>}7| ' );
define( 'NONCE_KEY',        'wr5FZ>v-[FH<}0:f{lf%]9Y0_]1Cv1C@KTW`4nekJIF##q+eJ2;:eiFO3i~)hn:K' );
define( 'AUTH_SALT',        'U8;U7fW(>f(-6W,$WJ,,uEx:NE1rjbldwnAaphCFiWx6]pRb7kC%[mM)pA)$=uYV' );
define( 'SECURE_AUTH_SALT', 'J_p;|jd{6[)6=aYJ$Y?$mWYD*5JI<;[ZvL8_fo:01^(S?>r,L;y}m>wXJE)t$9|l' );
define( 'LOGGED_IN_SALT',   '4Z1al.iZK$_%uXv(Hk3[!r)CCp%YdMW4,!6;,e7%KBaFXlx$fxEosGPA1>~PO$6!' );
define( 'NONCE_SALT',       'Y!c)fwHKtA3A(Z=G1(U0=_uPs!&ohwo%s{/%16ow:d<z-]E.~in_)DDkXE^E|d49' );

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
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);
