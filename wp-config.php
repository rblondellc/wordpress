<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Q!cM~`}ZHmzO@wMMEJ%)5^<<hv:*jsp(FG4$|drIU4pLwH1gLPtFI8e%6da>Sxuf');
define('SECURE_AUTH_KEY', 'S&Q.}`[3/vJC><9-^@bb0IL(<gr>;awt&W{%~#q.D+o.)Z}c8pZBN,AIc$r}n/G6');
define('LOGGED_IN_KEY', '(-:MZ%zU+aaxSd%L+4]9Ni:():t{Ggomz =U)<JgKoBk@XjP$X8A&AK4-;y4*jJ?');
define('NONCE_KEY', '2z8&3!74NQqSwUPGfZ&Y~>!F_:R-@GvT[8^_Q5E:QorO#1|A}_msu>fcETw?T[:]');
define('AUTH_SALT', 'eUC<h+930RP@ vF8+jQ0T;o6wP/)1%sP.~bM/@6O&pDNn@ZvXi|mOuC}Pc?E+wa6');
define('SECURE_AUTH_SALT', ']*q( uqux6C+hLOi#`@!A%^2KAf*fi]wg0J%S3qP=HMCK>=xKHrX7Pf/}O$@R3/0');
define('LOGGED_IN_SALT', 'bF{8^AZa~!Ot4L= F4gd.@`P&x4<k>qBl(^K{Yfi~bcW8PR(E@QVF5fPt90B%w%7');
define('NONCE_SALT', 'dau.QO>%.K8C]Du5_^!>xLat|Q^zr1r5:GP`^%T?&un>o|Gl8xu$=A!c2dsp)V-<');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

