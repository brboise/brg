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
define('DB_NAME', 'bretest');

/** MySQL database username */
define('DB_USER', '5942792d233c');

/** MySQL database password */
define('DB_PASSWORD', '5ac102184357e15a');

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
define('AUTH_KEY',         '<q{+XK++%9:5ovxCF1+W.+_|vVqtL22hk{/rU_IwhU._s,;+P|H^o<58R(z+7!NG');
define('SECURE_AUTH_KEY',  '#Si++V%a$puV2[!+w]^3A=j+/2<QPIA);;A|:w67EPD*t+3e$51!Yc.pNo%zi%[F');
define('LOGGED_IN_KEY',    ']J~/SK8bv^G|p9TKiVqreQz6[i-l(tnT&|)wOgyx*mmrjW_*.W#lR$py>6o5!k/.');
define('NONCE_KEY',        '58-{0@@`X 9He~J|n.x}N/m=o@Mc(L}K8!]n&uf!FvnyF*;|bk%*6w0l22b0-C-)');
define('AUTH_SALT',        '&cO3W_.Y(~uk?:+uXK[6Trlgr{WxV%T<6xtZ_>B7)rbH5+5+OOzG}H[aAu4Eg<D5');
define('SECURE_AUTH_SALT', '&vr/VC/;x#[Q ?YP$Y!*o$@vGKR++{@1V23i:-rg,&Hk|rsL?]+F:2++?U=j;1{k');
define('LOGGED_IN_SALT',   '}&LCM@ES{XC{*bdW1vmB|v_a~EYO+W%y@*HLKKk)RcZdwK:4<5_wJWN9Ac>iN-KP');
define('NONCE_SALT',       'O+*pO>7-J{F[nEFK;X`V-s%tmwMcYR^lR%A&xJE-Fp]KbCW&KxS_43Ge-j:>03bz');

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
