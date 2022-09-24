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
define('DB_NAME', 'buildtoinnov8_site');

/** MySQL database username */
define('DB_USER', 'buildtoinnov8_BlockChain');

/** MySQL database password */
define('DB_PASSWORD', '4568385!@#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ySoU1;kqV$nK.L+EMp7{aT!W$%#oxJ?+YeOmV^Wx&vLa B8prG(ov)L_{_jlQalE');
define('SECURE_AUTH_KEY',  '*Z>!JDi*uN;#mEMpuyYWzx558I7C3wmaRjTs0G8+m,0lFk4`yU$`GR1/A|F8qb[u');
define('LOGGED_IN_KEY',    'A23q^wqi&xZD;FZQ,sRbppBdE$2#6Zvbb7(om7qdMUKPTYa6<0>LI==hw[DQ: t`');
define('NONCE_KEY',        '/h~_tg7Q]Wyeb[4lh 4s=R]8b~D[<F{OTR<awF&=8s!t~tzPB9bAY5R:v#cN]<zX');
define('AUTH_SALT',        'fb3ZS#W>qb~iRFq{8f}p|5p1>-Evwg|CVEB;=$e8|T}1s%Wf:F#7*8 !8~2hEl&q');
define('SECURE_AUTH_SALT', 'v0M$=;X&BCTHs;O&. /;Y}.^.r{aT#Rep0m3Pt|JRZn.Lrka}D)tsGSEaW7-Z9CM');
define('LOGGED_IN_SALT',   'D|HIM>8Y X-VRv+LnB#,b+k[HXe;Cw7n#rnT!k@V,uEn&9nYPilg|V}.5>m27@^ ');
define('NONCE_SALT',       'k~SvNvBYfnzEx7Pv7=Oa_r]Z:t(<1AsSU8&0z~7F_9[+-##7;}W.Jr6%#dBK8g~4');

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
define('WP_DEBUG', true);

  
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
