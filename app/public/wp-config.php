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
define('AUTH_KEY',         'YpIRKDiCNqYDGVK1CHemJIoHDndPpqwMcXKNh7Lm01HgznKLWEc0qfqEncvTmdG82Zu8O7fOlNZ2ILbqyfI/mA==');
define('SECURE_AUTH_KEY',  'jqexThyOM4jhEwMZPO5YIyjBdFDMoeMxViRaVDAx++KDib70SGaxaqGsd5Ca1tzcEfWxuSFd/vlwlVxLXTkwMw==');
define('LOGGED_IN_KEY',    '23uzoGjm3et9lQzw8jKep7Yk/vZljwW6eqzW8ith1OMLAPx1Q+J6ICBmKfInZCQlLOIvfWSS2tBgfpMoRgsXGA==');
define('NONCE_KEY',        'UNqK6XTp1ksBLUVpi2h39rBpM9K3gnPD8QPAj+LLrcPAGV9ihfaJKUTcA4bqenULwotopKj5TS6ULxSXA60jAg==');
define('AUTH_SALT',        'dri9lmjpnbVs/M9OSBBK0CYJutUgisgEcirShx2wOBgdzFKKR95ulQ2a3a+ITrCFKj3vwVqA046cRMmdqdg0rg==');
define('SECURE_AUTH_SALT', '0/WDLBVKan1IWs8X1erGEM7ZR9QuDk4L4rtuCP7sD4SeSqXYOBQxYK4ALo5Or+Ugszcm4YfTbg//ajSV88Wpzw==');
define('LOGGED_IN_SALT',   'wqxx+POrCEKv3cdbtCziLVu9suqWKtIEdD4+iArKCvXNVKwSmL22Svhm6kU+cV5oTiSHAPn0qRT/MsR/HaLf0A==');
define('NONCE_SALT',       'dLyz1232zggWJPKImc5BLTnRZpAUi36pVTXeSgGdDCgDwdYEoox6LqSMtYal/FgQ/SPqZ2LBwt4RMU46M1C36Q==');

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
