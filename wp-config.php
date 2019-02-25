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
define( 'DB_NAME', 'bootstrap-wordpress-theme_db' );

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
define( 'AUTH_KEY',         '{`-!2DG{1SE1ql[ `ZLVTrfA,M[N%{oE}BIC`#}q3_}s$OeB>qXUsbDi]uY 5&|i' );
define( 'SECURE_AUTH_KEY',  'h4AsbF{kR299WQ>^PT/arQv1lR2xq%F}NO8-1G,`(nN>AeeC+19F}e5_Ly)ZN4 R' );
define( 'LOGGED_IN_KEY',    'F7zO/ kE|,Dtbe55RF,-.9JB?L)vK(fB#iskP@uMMCd)1OY.6`WuHwSfLG#^(<fO' );
define( 'NONCE_KEY',        'Jiw~38(CIq)n7MT9 F]c[S06#t3/?C?{1OhXqYWexu7X0DV~/sCI8=_mUTnxy%->' );
define( 'AUTH_SALT',        'Y<6a<Z^*QboWXRGavoBfs[shN^Qltr[Ei]8Jbv6Z&%SO2RsEqoq6ZDZr]TYz]|q^' );
define( 'SECURE_AUTH_SALT', '3UN(ODwqPsRV~v@}!k~~voo<Kg{vn6s)ofLC`h}[Qm,Sd.kdCe1m[[?keM+]+]UD' );
define( 'LOGGED_IN_SALT',   'URAB#BN @CQra$9afyOKo>~ZGWiJ+RM;4TgU*3y)Tx`kUad>!*,]IpBm%<]Fo@/A' );
define( 'NONCE_SALT',       'NHTt9|6E0B[MsHZ]S.qpWF:P-fXv<2FETRm0>D6ToqE$0`{aLzygz[C%]iVy2b>x' );

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
