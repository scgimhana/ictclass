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
define( 'DB_NAME', 'ictclass' );

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
define( 'AUTH_KEY',         '&+<5SJqWSXiZ(|a6JgQ+fu[}D}Uov3O5qSM<7,41by&rl3OyM|rMs<?6`A9L| z#' );
define( 'SECURE_AUTH_KEY',  '?Td0,?v:%/<ItJyRp`m:6M*Rx<VuOH%cNd Na5;]b[c;)nAR-t.N%qe@,S+?N*pV' );
define( 'LOGGED_IN_KEY',    'jS=Bj;X19P@V?=_GU?3*tNU},V@S>Y/L fO42O%+$ Vcc$Yn@r?.4xhiZpMa3O8%' );
define( 'NONCE_KEY',        '^um.olr:L`d@LF2GXt!vx!__bI<W>+@F/oy}fkZ8e^Z@$SUzA 6yPNHbM&GXJ^5C' );
define( 'AUTH_SALT',        'BNIXNQ:i%|-BoB,+{aZ4w-}1F17s:[s?XW@vM-pi>C/gJy,a:@yEM!U&?,2a:M]y' );
define( 'SECURE_AUTH_SALT', 'Qab0y(u,;/wO4#T}IOy^5+}(NoQ6I7(VzJm<n?LkefMD8 X;u=4xR3os5XdDNWU|' );
define( 'LOGGED_IN_SALT',   '&jf_*|_BE{DvIN]6J<soglk=ytngppn0Pzku1M{j9GwCZ?K8e$DvREdt58=~[V+}' );
define( 'NONCE_SALT',       'jo z.VC*lws I1|hH;y#,^uw+_dlhduJnq;XWx+~0>J[daq[ AZh61%,$gu~+9}G' );

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
