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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home3/nbeers22/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'nbeers22_wrdp1');

/** MySQL database username */
define('DB_USER', 'nbeers22_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'YeA2utMIEim3Hjs');

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
define('AUTH_KEY',         'S(M=$$rrM8zDdTG:964(IKPR|=PwZk3S>qSsY5w:HQt*/V9W8_C2LHC|Eez@gq;');
define('SECURE_AUTH_KEY',  'R8zwKE630PaB9DEjN-yHo2NVL?C=@^e<B6Hx$d22waH1BMKJA1:0vWk_K_bjTvsp<S:)Dycrddj');
define('LOGGED_IN_KEY',    '_cBh/Pwdgn#(cEj#^#I?w-I<BWG#bq7TAl^Rj8#F7B*@x@/aTgqxi35H/p!xKi72lSY;p-#FLk0beO#N-caK!=');
define('NONCE_KEY',        'YoLzP\`:;HThRXUKR!:FJyh7m?W?#YpU@se9RGL(*<9lH@5#0aOte_*0E2_L=');
define('AUTH_SALT',        'f@evlQp!H$d_t)Wiw^i=#-025V;wPRREmc)XL!XF!b-W1tyIdDo?Zz?dmqnfk!z?Y:sTq$');
define('SECURE_AUTH_SALT', 'kMP5UeZtmtJe2*dX>JOE3ITrNdM2QgH-#:1\`uKgs(p$?6HIZbb>dHlAa;UjCN9oz_!Xe-');
define('LOGGED_IN_SALT',   'n|MP@03mYDe^K*v#jm~938ddId~^b67/tf/mKE0YN~h_F2hxogQ2A0FH\`(~|z??1g');
define('NONCE_SALT',       '<4w<o)/Ndteq$bI;;ZRUFZ#L1c?t#Y|pYX$2*A:$734n7JYva^i!o0-Dx;@Srgg)T86DLjGe!fU(j?#u2t9(hAs?yQIy5');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
