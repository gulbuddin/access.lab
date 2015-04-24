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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&<PH*~1wylH)0(|`rm5oMZCdJPhpi5O&3>2#^j1Vq#N4w#o=BWq|*HXd[~KpSG52');
define('SECURE_AUTH_KEY',  'Hr-@e|*cCUi-9*sN89rrjR -y &|j@,5/Gh+Q66$<1uJ]pTG{&>EuO32%;*NAEKz');
define('LOGGED_IN_KEY',    '|wDv$0 J[HKzg-r=G23a|*XKrHJ$k2 rW-RP)tGqq.X|s+o87tCi2T<5,S[z{J`u');
define('NONCE_KEY',        'q!jiMn[o)PhinZEUOzjjF1vn*qfE.tR5~X<{+z<+K%?v@wlxylS@agXc2`DjRAL)');
define('AUTH_SALT',        '*Wsz`llp,*h_O||w/^V`X4%d<{f2<X*/@w}c94(~2U@)q~bxJ^*j5u~3Ez=#t7Qp');
define('SECURE_AUTH_SALT', 'l0h%WlfCI)S+mJUkOpNF0Ywvp<EkyX_hGc(uK_$Hk^D^6E+!ozSO36~l5q;XRkG<');
define('LOGGED_IN_SALT',   '~C@#rd4Xgv4y3hfOq@ny aH*-ly4#!V%xF3H=?np~;*hb>s B4d-iSfS]*kAG-2^');
define('NONCE_SALT',       'q0+S~_-f_ s 7W+B!dQ[SISUNX)R<i-j@G[-RZgB{np.@Y@P;>v_1n=n-6x_-F`N');

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
