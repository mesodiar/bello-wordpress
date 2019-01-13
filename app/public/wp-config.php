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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'xMiK0uzMjwHM4gGcQ6R6SK+CSsHD/W4c/kRXkWiRKcHzg2DM1yj76MLnVrWluN4e+CtbwQCPVb9cW7fzLTMIYA==');
define('SECURE_AUTH_KEY',  'U0Uz+0vila/QlAtrtybw+c3pLphnLpmIelEtNG88IfYAqB4YYey0RvBM4ldJ4PJ0bljnGLe15tauy7vLG3DV8A==');
define('LOGGED_IN_KEY',    '7pBeUwKwNmwn+eD01DuWzAKzFwHW4H4Ei/V6VJS5vJ/M+QzOj1nFFTY2M/YrQnzmwqp4pgPk4D/ZxE7gx65T8w==');
define('NONCE_KEY',        'wvDsRedvOylRT1g3Ssk7xXmsGRlBUT7TJflVBHsdsAEuSfGTQFcZF+x9iL+iwr7MY0mdXsJIUACTeublHxSLqg==');
define('AUTH_SALT',        'SjPEUjPaekm7B1c1fgYUv4eolBWfqiUSWBCUUQjLFzW/+GHvlknFXdJX4Xm3OrcmSDnvQ+K6IglT8amY7CsPjA==');
define('SECURE_AUTH_SALT', 'wCmarZFP0IcTG9f2aJpc9TC/wt3DIJZSf8uZ+aKA8Sx7OSUPbIh/uz0LVb8p7vHFZV3VKNpa+zzTftNPbAyQrw==');
define('LOGGED_IN_SALT',   'qvZmoFYTrC7iBFaRQ0C2xbh1nOizURXa97z6v7XWEMzd634w/7W0c2pWikUjoALgKNqWnfe3PIrBt0F9DStWwA==');
define('NONCE_SALT',       'IOU9dQ/9DkPxsq0FhHOzWYpu8+L1RiMZ/eOIuOMqSTPVPfUtwnpPPExI/Aylgp/RZBD42NeAKEQFIGiS/O5QjA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
