<?php

/**
 * Spoof HTTPS to WordPress so that it doesn't attempt to redirect to the HTTPS version of the site. The
 * site is served over SSL via Hitch -> Varnish -> Apache … the connection between Varnish and Apache is
 * not over SSL (and doesn't need to be as it's on the same box) and as such we can safely spoof HTTPS
 * here. Not enabling this option will result in redirect loops when accessing the website.
 */
$_SERVER['HTTPS'] = 'on';

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
define('DB_NAME', 'c148_2_wp');

/** MySQL database username */
define('DB_USER', 'c148_2_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Yade!JpjTR23J@wwvnRDJs2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2RPBg{.7LPi{U8G2+@}%35K#F/~76RQwtH{^BgN7vj&QV/{XE6s|@[aI`:xkhzPz');
define('SECURE_AUTH_KEY',  'B= ]~XYH<S29>k`rQ;XhJh6dp0R0$w `r`+Yo4lLPtm8{5~tR.{pz :Yd2)0>N>Z');
define('LOGGED_IN_KEY',    'ahjw=-slru*0@+t]@Zt~{OXrNEe-_wA3?:ZV1T-o<wO/u?ESU{DmmHO{=~paq!_K');
define('NONCE_KEY',        'MzS~tgL73pJ*97Z6>~>UbaUbguo;4|Ah[xi3Yt*$/KI<zTl_QoUU#^54-RAam/98');
define('AUTH_SALT',        '*u:1IWIoj6(TJi8O/(ZU).%szbl^=njF+1,Cf9n|lO#%--My!87zU7RsQ+`h91Ud');
define('SECURE_AUTH_SALT', '_M,-pkOIyV-np)r=D=9pdP&Lag#F,!_uVnu/.`+`5VZ<s(OV|{gKRT}nrEB;z>BS');
define('LOGGED_IN_SALT',   'qZklz7&%Nn!Np:LGsOP%Y&~]wT0bPoRX1`DoXGT*A?XS4o+&Z~(v8+^}ozip>7Gd');
define('NONCE_SALT',       ';pcf/oA$)$.~%dd|,1`&w6E$eg*Pp}MPMQ80cN]*TeNI8Am*{)Hr(xQ-%$[+KFF`');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('SQEV_DEBUG', false);

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0744);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
