<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.ma1nf4.0001.use1.cache.amazonaws.com');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressdev');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cu1mdngqiiww.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'UFDT{N|Wep_*RkM7CE;&5mA.T:EHDd5,0?z,2SjI/*A=C-55<Dr1{ep@%%YPipoB');
define('SECURE_AUTH_KEY',  'v[{$b5I0%Y]Jw!1{g$epF~2qW1tvpHh0l[N}|wrBPd <pIg3= 6#mm#n3@-|.u:~');
define('LOGGED_IN_KEY',    '81A}kSz9JrM1hcYG4|.tWSKyRUK%L%y*PCBkWX-^q)$Yx6QM0ZOEc#@qVNU!x,8N');
define('NONCE_KEY',        ']:_VknWB.ll7,|o$rT:VD|cL[m#Rf|7_68#VMc{Df1ypuD_*&WrdH|VeRf<d*JKk');
define('AUTH_SALT',        'sJYmyuN^G0Q>K$i`=?$}%*IAkltz1J,yn!J+|5oDwwAU-x+U7&[$t+;2 m^yP6u:');
define('SECURE_AUTH_SALT', 'J=|4^(S|te_[EDPh2^QgjzxZFGf|X3PL]LtFOg@H01WylNpsPTj$hH[}OM_szV^Z');
define('LOGGED_IN_SALT',   'v?Z+ J6VL}Bn*Euy+Oe]|E-R-KKF#>5n?{1sKby(Q.:mK^pl;&%}tY9|*-[[DxHO');
define('NONCE_SALT',       'r`J>gr|qZAe?ua9pPol=+6:vTmyRtCd*{!8+a%]VrniB$- ]~in|xW2&Jfb5We6Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
