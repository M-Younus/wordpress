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

set_time_limit(180);

define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         'Dvu;jSUgJRK@45/lzx*9au<2y2kV} n9_uH?pHP?/PIQ2+aXtuWW$zFVSvc/Gz((');
define('SECURE_AUTH_KEY',  'f{;[y>R#V:YvFM*,5]a(nDW+@5gIe.T[^,<Lif,OM2`~kcky-dgs{}_C6_kIB1s9');
define('LOGGED_IN_KEY',    'KEwphd96BG;;+ aN&oF1$97^O|/V=qS.WuRJEpcYdq[R]ce5~3+0TEoBuKJVW$iP');
define('NONCE_KEY',        'UB0>ULUf1Vl/cZku.(>E~ xo2${NZKP+G<2L+:PHQt$LBK7^AeyP+gNcH;yi`^Lu');
define('AUTH_SALT',        '7]TjgSqSDHpA:qyh;/<_@yj||sSa%#ogW{|D2.<A$p6h%e:Z/UR`&l]@{l5|Y|<,');
define('SECURE_AUTH_SALT', 'KMZQ`Rs5*3uCo`B}&ZM.]|qO#SGRziQxEvwqQ |hlj+CT Yce&IA=3%L,Cm.y3Sg');
define('LOGGED_IN_SALT',   'EIHv=1}R&3;6[iB~<8iwOGS;XYorJ@T;[O;UQ&Y]xQ>(dd@(lZ_.{]n|@H+d %/N');
define('NONCE_SALT',       '=O?j7C+im]r!lxkB+EXM8,smL?mwgIZz4x(p>ultcg{w:C%)Z5T]4l6zF|0f5>o3');

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
