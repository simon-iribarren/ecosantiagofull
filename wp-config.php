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
define('DB_NAME', 'ecohumano');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'to2somos33');

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
define('AUTH_KEY',         '@r|HW0$3q}#oknPbOfz0{oX:zu>$Ga{rcT5~I0s+}1C-w!@+[IIe]HmB./{c+X|`');
define('SECURE_AUTH_KEY',  '#+hx~2^8^M^nzLMo)_4Y|6@|pnD`+qMC7z,j~l>=|?|H?8$`nmL7!bM_e3o<Au_o');
define('LOGGED_IN_KEY',    'X_rZCuw5,*($:;RmfN99p9nTD)}Qx#m[|fJ{m9n`n]rqALH||0-E{V_Kl9%TGFvv');
define('NONCE_KEY',        'jnjul]b-2g UBCFr~F@pr^1;jEz@-56/&f{ `_paHZ+<rR?Z4=g/M8;oS-+h~u>j');
define('AUTH_SALT',        ':-Rh@9PVC&KLH,_`z@`d3liA-C:nyh]y>ie?+YE1F`F[^t{+{1kAV+@WbPY T;4>');
define('SECURE_AUTH_SALT', 'OTAy.GwM{h(IT2yD@t63BN:&|-M!>Xok6s[=Sg2dk?JqEnSp4C[*L,4#p-V;NI)S');
define('LOGGED_IN_SALT',   'p* xC,D!frj4-pxaJf93+@HLJ/IIqJ{`.o@oh|%aMuHRZz~{r4|H0:fQ+j]ND@:}');
define('NONCE_SALT',       'rfOqO>F-cK@mz+n48zn14f{h{+_KK#;/#NWxyj!$e-/jno8|~#%/}}hJ-}5`V,6+');

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
