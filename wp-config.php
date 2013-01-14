<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/vhosts/itsricky.com/nemo/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'db-wpitsricky');

/** MySQL database username */
define('DB_USER', 'db_ricky');

/** MySQL database password */
define('DB_PASSWORD', '4h200ed7');

/** MySQL hostname */
define('DB_HOST', '64.207.146.84');

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

define('AUTH_KEY',         'DT^pj>Y)PpRdNF[]-&Ij-*k E;q>W_M%!XSbN_e+MO6@F` Ev@{4c$BC9/%iQ{IS');
define('SECURE_AUTH_KEY',  '2^<EF-/:tZn^u*S*y$*hT=`hI`qLWZ-&CNQ;u-Q`w+RB;FWkRHmT3l/8q.v}L@/]');
define('LOGGED_IN_KEY',    '@oaXf<2,O(fX)[f}&pDl^7B;SRRvD%1<+WTHyV(,KB5S%833`^t+y[|40-yeAaJt');
define('NONCE_KEY',        'N]3.PZLI{|@X$[Y#9C~M+Mbw|H;4iRk:[Irz.)=b0f;|:Fcf#sOP3q)G[#Pswg|^');
define('AUTH_SALT',        ' yBm(J%pws3YIEL0d_Iy|pKN7zL~9BX}GP-+-Qnk^?s)!fpEi/vF-^H{(voQ9 90');
define('SECURE_AUTH_SALT', '0>/Bi4?D.//_*~N| [qrd/{+{Z-aZGm=6_p*Fp6 cFS-t9DK@6vQNd6b:B6Ncivr');
define('LOGGED_IN_SALT',   'iwb=OV.|3reUF8oUqxGMiKZ+=!!yY-U~RDnsYAM_1<$PX[R/+P@U-TM@2=A@5JU=');
define('NONCE_SALT',       'ccnTeO&-hcAe/frc-s*>PBK@lGiI+UTu$pN*U/Q*vw[eZ.|ffnDrmtq &heC]z-f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_IRT4_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

// ** FTP SETTINGS FOR AUTO-UPDATE ** //
define('FTP_HOST', '64.207.146.84');
define('FTP_USER', 'ricky');
define('FTP_PASS', 'm4dstyles8');
