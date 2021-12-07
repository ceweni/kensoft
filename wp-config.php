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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S4Wk14Z5qj694ChaRGaEqyAV73NYVPs11JRWjZuIyO3AyluGEe0pMy81Z3YXH6X/yBUL+NeEGrvEGARNriFo6A==');
define('SECURE_AUTH_KEY',  'aiSD1GPj0goTOIP6lM0SEdHkYPNDuzZJMx9fIFhAhsi/pzF7z9L9TD5zsQxrW+zNdok3URULHwlU3eQT5RXvWA==');
define('LOGGED_IN_KEY',    't0MdlujIFmjbkukhCxCaPX1t3xLQghfenr0K0HXeoJ6yNNZAV2Y9yWRXGl1ttmYUXP2SwnVWBbemgy96lEXe6A==');
define('NONCE_KEY',        'I0iOcrq6Fr0z04BWhGWALsWS5zKFtyCBl/7iMCz8ujQbHJYgQHn6Klyuro3TD/XpJz4yzPtQgmBWch3s3fKdRw==');
define('AUTH_SALT',        'a+VidJgn/JgcFBSoQuiB/4Kydvnk2Vqv//2yDHZ597joKNibq0NE2StLFDwDJCEaearHaR6B4J+Bsy6cciTobw==');
define('SECURE_AUTH_SALT', 'LVtjOq4Qr6m+m8N3MBx9ccyyZZDKtWwFIrkf13kgG8Zpt8dshLtnvePzD1gkvYxsGP7hSqC2BfH07hT38GXOMQ==');
define('LOGGED_IN_SALT',   'vWw2eyXtP6vqlFZ91JVoT+i6vdYwMaxL8syygfOCznb9zaa5reCvCtWdJ8WUZuQkaX7f+VxqgM/0V+2XMgcKkg==');
define('NONCE_SALT',       '2WQ3Lw0wA+q4taN5MjjcErexw/XqRpnsUtikK2KCwNDXIXIS9z7zjvF6kK4FRYJ5i53I9aG2xYs/sBJGRRcbgQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
