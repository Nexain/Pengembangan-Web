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
define( 'DB_NAME', 'db_stpaul' );

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
define( 'AUTH_KEY',         'oE=QWRYmn5(=~K7bKVv#Xe2rLdtz+UFVyffZF%H#c&:7_17;Rhw/D-l$+y.5SfY3' );
define( 'SECURE_AUTH_KEY',  '!oN,9 1wRC}zn^ez6P5wINn,#QMuM402BZi0l4$4l=.Xr|8,(<Tj^ r{s-<5Ab B' );
define( 'LOGGED_IN_KEY',    '}9x(LNpfJv{.kFj&T,v>o#3eQt=5##~1FY>J=Rj=hd^VIT0!.L_ZRwH_mj=rg%}q' );
define( 'NONCE_KEY',        '@kQng4f%.J5]%BOR<T4fW0k?s1O(#6 On!W>6{dk0^;-ce$yGTCFQB)leRu6toFO' );
define( 'AUTH_SALT',        'BKT^csAx3+e]3y:+q9]EEDJzkBd[`@b|IJY#OaD_g<K,3y)l<vTdCc$6l@bHkvH]' );
define( 'SECURE_AUTH_SALT', 'KbZ]ko<mQIcQ|![!tp3S7 0$}ZMG2Qj:WQkyXW.icvo_j$fCn$m1)R=S`i^Z9 F@' );
define( 'LOGGED_IN_SALT',   '21xBdO*A[bIb6xp2+E^0|%gC-xT,=cn)t4hLz88@uhT@.Uaqe2f]<-tmZ/qJop8F' );
define( 'NONCE_SALT',       '9~f>mHiU(@9PBXWcRFP<P_zAVw-Az:Z+9,SLL;JD*aK]mEr0QVXMc*?UQSf(*0az' );

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
