<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wa4225_db2');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'wa4225_2');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'N&Rd2=3SQLdb2');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', '127.0.0.1:3307');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'ad(&5Er Bd9NnbZSpx(7f517xY{-r#M%]foqoQNXQZq<4!`TMv-1Eo<%xSF8{{ef');
define('SECURE_AUTH_KEY',  ',oA*4MkAt#}5iMz[wA;W.BjaOD|bibaJTC|5(dr%Xc5.)^XMr]:ySeE;rO_v|(bo');
define('LOGGED_IN_KEY',    ';=+`@Z(M`U|[(|1$+6q%;L?8^$hGAg^C#Dg^5/L@URkAF+zWX;1NW0S4U|`IY35>');
define('NONCE_KEY',        'SJY &%:a#4LB-]w=ts /E0c`3AZ8|pqrs5BUN ;GG&#-&p5}{@.t^m8XTKtRw?Y]');
define('AUTH_SALT',        's~,)t-g.-,c%yFhOLdh7MG-I2-Zec{RxOhc]UFglIRXg{{2ZZt A)ZlB%(63q>!Z');
define('SECURE_AUTH_SALT', 'a$|ZJBT8<;lqS}M[z8@OHF-nRDZ J;};&.gLLfM_G{v.`L?i(~cfr9XkaSvHh-%^');
define('LOGGED_IN_SALT',   '%2OE8DE5,1>]gs]JUxjz?5%YB@R@tH-E7)j{N4o63q278+Sowya!1rDmAXHrgRQu');
define('NONCE_SALT',       'b&K/.-Kp|z{F+cI>kH+0(+lC1#hy!<?TJ(b>nG+r!NH1`Nn7!+-:Y.RY$guI4B/K');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

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