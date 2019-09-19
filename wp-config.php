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
/** 
 * The name of the database for WordPress 
 * */
define( 'DB_NAME', 'example1_com' );

/** MySQL database username */
define( 'DB_USER', 'example1.com-2wdCVK' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UVhyUxOSHvNR' );

/** MySQL hostname */
define( 'DB_HOST', 'global-db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'I[=CJV[GQ`gCP~WL^(8!f$#bb~{DT@L4g{.Z[+y}n.c:_lEdK ]fW9,Pl}[ @W3#' );
define( 'SECURE_AUTH_KEY',   'T)XjX3^G2R}ADZe+ph@|-bs~wsX:<=_JO,)d R*FC>?mF>!bb,GK4&w/FKy-VZaF' );
define( 'LOGGED_IN_KEY',     'mB%iAo;&VOCfI,oRf<FhhI/a<Gl6/,*&8X9eT/ME7s!:1,]B}hW*h`NRjmj[F1El' );
define( 'NONCE_KEY',         'AC}<4wrd`=.!]w0YR]]oFJyCHE=~vi;.`[?gzIO@vmbv7[H )xL/M[U7;rb-!dAL' );
define( 'AUTH_SALT',         '~Uk3Q_0Ju0{j~34@*{@_@M8oX@Y]z^Mj89{+yM_Iv00hY4.f`nZKaTzNUL&pm)A]' );
define( 'SECURE_AUTH_SALT',  ':y4FS`^)k2Fnm./?Jg#9(#um7^^:!j*>(XnSS;SL=ES)V{MrAvA]^.w/J(:JNgzR' );
define( 'LOGGED_IN_SALT',    'Jf~%1S 5ea.e~p?0=[,86zn0=8}-I3:mX`m(Mk}F[[,yKDOavvB.NrkOxM&8>-V^' );
define( 'NONCE_SALT',        'Ib3>7lbkio5u(=BPWP3j$+u~9.sYFuNH/zJ=mX.->bT.6$$A$`}m3$BiI6sB7Wl]' );
define( 'WP_CACHE_KEY_SALT', 'QLbFPvU s<=$zd%q(ywgfX[G^oxXVjEY,n,Wxx2=-&ki1XdYsp+umD*!7W?1p(6x' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if ( isset( $_SERVER["HTTP_X_FORWARDED_PROTO"] ) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https" ) {
	$_SERVER["HTTPS"] = "on";
}

// Enable WP_DEBUG mode.
define( "WP_DEBUG", true );

// Enable Debug logging to the /wp-content/debug.log file
define( "WP_DEBUG_LOG", false );

// Disable display of errors and warnings.
define( "WP_DEBUG_DISPLAY", false );
@ini_set( "display_errors", 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( "SCRIPT_DEBUG", false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
