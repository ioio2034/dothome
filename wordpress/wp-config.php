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
define('DB_NAME', 'ioio2034a');

/** MySQL database username */
define('DB_USER', 'ioio2034a');

/** MySQL database password */
define('DB_PASSWORD', '2034ioio');

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
define('AUTH_KEY',         'e)?[s{E 9>_d2_>fuDaWbvr*?W eU~RU/W`xlH@c`*L,QWrI)*G`B[z[rAI>.h5*');
define('SECURE_AUTH_KEY',  'GqW~d6kl`KEY(CPO0Sy1RKQldey=joh)=g++MY<E=}D<kBZFs;+2kN))GRxcB?.a');
define('LOGGED_IN_KEY',    'pDr3`ow?;qwoUe//1RA_I0~XwuoZTH;`FqXg@MDd>oWNp<0 9.GC]YVhoo9JdeB}');
define('NONCE_KEY',        '$k2&!)IN9^fNaZ6a&<N@R&sF+9V&99&Lj7.NQwr&`)kX{UB!UQU.B(gB^[Ey;ii9');
define('AUTH_SALT',        '#MtmEn+,cD+pS {/{Hu6|kv&-Q>ET{p(0QLRpn)Hgm E[#Mg^`DvD?L+1nw>&cVX');
define('SECURE_AUTH_SALT', 'CFl:vz[W;3 Q=6/>Wt~5sk^lqTNm4O%Vk+<!wS,y1;2-q:HDK%q3*]t=lv~5Rv~#');
define('LOGGED_IN_SALT',   's|r^Aq<i(Amsii=^c`Z0C8H`ffD]s&h2Zjn3;kFVxqzf(C7aN/(WWlfo3,rrdTqr');
define('NONCE_SALT',       'I3B `[e/5pGrKnf+#*h<CkYF8bv,M4|%.hR/)q4SAb_Z+CC~c4HPJIZ/91T0 p!q');

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
