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
define('DB_NAME', 'smartphone');
// define('DB_NAME', 'hce-smartphone-local');

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
define('AUTH_KEY',         '5o4w+i/(8QsOp%qTMWwFNCs#dI(VahgL48ofKy3c7/eNG[_4(jN4X=4b =p@)r5u');
define('SECURE_AUTH_KEY',  'ienM(KVvskLl|-oE$jyB3DABXi p#Ji7V5SpWIz0;>ppJE#} 7g{Q@QN0BBjt$`~');
define('LOGGED_IN_KEY',    '!-58+|R6&!dwF9U<P8A6-KU_)c~uYcX<#HPq`P;Ff=zR-@8%;f6c`Hf&%S|I<be]');
define('NONCE_KEY',        '>O|B[o%ERs.oH*0vPk7q{95m9;pKfZ+EXLH=FcaxphJMz_H{e6:DYA2SjtE6X&36');
define('AUTH_SALT',        '$@uu)g@;oW_FrAFG[z75o-2|GI/jJ iE:*{JPZa$UWS @@HKBv+g?oy)H!}qX-Vb');
define('SECURE_AUTH_SALT', 'PG!51CxaIv>QhaHP.%`!Wc7(6/QHn7,fUB#{HMAF]<13b[2-nfD7+e1T[x)DO5or');
define('LOGGED_IN_SALT',   'L0d!W.G aY;/r_zD_/V,jX8}|8pS{3UyY.oU:oc#%S{@/`IBH [X#=(F46-<:(v*');
define('NONCE_SALT',       'Hgviz<b,>X*3lpbj;up[=apu-q+?Y{CYae)PR!_owzC$(:i6Nj&0tewU&]&o=).C');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
