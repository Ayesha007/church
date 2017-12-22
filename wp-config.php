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
define('DB_NAME', 'church');

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
define('AUTH_KEY',         'bSD8;#(,5d>1i/P~G4jGX6M]DZorUNfRiN9D@u4eND9>^Ji1gC)[@ Q`]L:eQe.L');
define('SECURE_AUTH_KEY',  'UX(Ke4vk.1<mRRgl?&gwHNBc;16V!+L3W5<!uL[N*v;otO!]QHAI9f(#}AoDfw}d');
define('LOGGED_IN_KEY',    'vtGnepDWMr$jHkp[A1Kn,2}l>7+b+}+;]6-7K*dlbs~[EZbscq#Y]3W7QeA$=eC)');
define('NONCE_KEY',        'nT`UYCo4Zqz?_1*SNR:P>h(T]<R6w[94Xz}{v)G?W]j7!#@G(iwZ&JpdAz2_-@QJ');
define('AUTH_SALT',        'D9#gCFjRJjAg+-Gs|e2H1_B:npW!:!6t;g-Beb9;y; Ys>qk&]jg2hCh| rW_AWh');
define('SECURE_AUTH_SALT', '|H7EG-U=.o^NW4%(0z^fobRI9)tm?<dyVYGPeMjf8}F@2nEGAX{nN05EM25G<n=?');
define('LOGGED_IN_SALT',   'dyH] e4^_x=@hmazjt=]uwC1[n6fK!Te@4}{+4tPF;Rb#_Y+~7<rSvHKvyT?S2JS');
define('NONCE_SALT',       '}+ce.*BX]MM3OPkW>)fZi<3;}g6OAuotwqR%$v>}v7}}C7Nw2{<Ic{ UuM&%y`!8');

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
