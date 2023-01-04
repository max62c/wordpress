<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'EShg8Y5AwNwu4C_F' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wGF.uoN=x-f1Y87bEln/as1,F 2h|f!*2(uHJcWDi~vYiwd3VhFlyq3eAF9:i$f%' );
define( 'SECURE_AUTH_KEY',  'QfCWy50J7C&v+),Zrdd.bxebv5JtEuo%&CHo3A/kBRAuz*3S%]|[}Wr.^y4L#>95' );
define( 'LOGGED_IN_KEY',    'N8qfavv4-eV?Sn.0vvy,qPCcz>*[Ivl/DdP&%yR.%A_&ZCP>]kNMn;+;(5.(`9}*' );
define( 'NONCE_KEY',        'Fj_?G{;dqAQ2|ab?/Hq6.svY$!{c$(d5).Ch@H+.$L*8kXjl;K)A?*/gI#Sa.4&A' );
define( 'AUTH_SALT',        '7<@U#k,0gw%kdQ6Nt];Xx?t5HQmt@?y#zwXCfEcA%jF:Aj}euO %s;59D^G< Rq#' );
define( 'SECURE_AUTH_SALT', '~aAP@jxZ0A2k}c__|(w#D|tDK<;EWVZD;r?NYHH3iL1eoxGZBoX03AQ?oA!|Xi9(' );
define( 'LOGGED_IN_SALT',   'FKJca5U:JV4)T-9aIx4>:(!Q-s,1lE7Mp ~q#C@&?au]7ksTDPCx2ILIs[zto5{1' );
define( 'NONCE_SALT',       'VJd(`>Ec$6!N&15HFXq+KsTt=92C`[ZGgVA7E}2{s&*7z<&>g$cRsSNZ/o[?A@) ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
