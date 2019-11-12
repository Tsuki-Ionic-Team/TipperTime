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
define( 'DB_NAME', 'u130997546_trippertime' );

/** MySQL database username */
define( 'DB_USER', 'u130997546_alerter' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tt999999999' );

/** MySQL hostname */
define( 'DB_HOST', '31.220.110.88' );

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
define( 'AUTH_KEY',         'viZnWAq-u_, pT~Y5nz//AqKL{A~`w!J?)uh]^<5B7f3[75U;FH1r>;Z7z5DTB8Y' );
define( 'SECURE_AUTH_KEY',  'lfA7xHyO@^N$>(d?)o]W-B jmmXvA=%*jke*S8Q[;-<fh5TnQJwZYC&36-v7EF;;' );
define( 'LOGGED_IN_KEY',    '4-NBr.l@1Yot**7gNDX~uJp6?C!H-CAPu?M$nT2y2vb-3%O~tYzHBXt*u&_XT5(]' );
define( 'NONCE_KEY',        '*E85e50hvTS@{@2,nllS;7P~duL1}>T->/~qwj apQ`e2rTPjX*@(@dEtA6?A{mJ' );
define( 'AUTH_SALT',        'uRHBaE#-YLb)sQ-#^@Z8s56.9|lwJl^}0jv<=g(e:D3-}j3oMM~m)^TLfTPr}*ty' );
define( 'SECURE_AUTH_SALT', 'cp{0Gg7jFX:Z4E@of2R!yr?U0W%{}yT8qd!PB^0hkg#<nMtbmHCI4wQ,Kn9EX&}(' );
define( 'LOGGED_IN_SALT',   '!P!{JkGg~t.Xv$UL`;*gh0+uQ<ufI7`j<0CBSPBB1AC*n~s.}>B#Z{FKPDI+>V1;' );
define( 'NONCE_SALT',       'y^(e^fd,P%Bs]-#kx2&i|s{J9Uhz7/ayTvm*rIeA{]16-H[1`5r3{>p?>uXbanb:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt_';

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
