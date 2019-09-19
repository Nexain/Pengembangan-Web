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
define( 'DB_NAME', 'wp-admin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':vmM?Z-BB3eu^Y,]#k)KW|%UWWfP+OOC,Cpc>lbkFH~*}j-_kkuoMZn~KB9@ -i>' );
define( 'SECURE_AUTH_KEY',  '_2vcKgO/,wCYEu V%R=]oOM_&De&&bPK;!OXb#S3t6fZK(@-D.5a25?:mvgE6Ylg' );
define( 'LOGGED_IN_KEY',    'J_%fM6L%TGkS6ZhwjF932v:kwF$DMj` @S[/K=qT$zc;K1.GmQuerWgzyn1ftX+1' );
define( 'NONCE_KEY',        'x4P^3D;c&TGkMEv0eu]36b0+ynZy/4nbq<q[/dr#aff%q%zhkfzT]g0CVTV!{#3T' );
define( 'AUTH_SALT',        ')RI]V@E}N x@l#!/t!J4<q=n B[g23wtVTw_zT</|/o0E%-.6DQA<rn?}Hk`B={L' );
define( 'SECURE_AUTH_SALT', '/|>5u+v4X;vJ#1HAYt.C]jBdM<bL2SGsA83<TI(`t.yW=6HB^vpnQp.q4.Ux9Ja+' );
define( 'LOGGED_IN_SALT',   'JzkzI(D![-J!N;cg7*]~*?XI:Sa+tTiu^Vo8IKr>(>{qj|mZwH*=~*FFh%isOMQ,' );
define( 'NONCE_SALT',       'T7uzNSU[4z5!,f=pSfX G@2j9 E0hW>4TaBsaVF;mCk<!kOR*ENu{*EL<xu[YQV)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
