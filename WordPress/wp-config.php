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
define('DB_NAME', 'Makae');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'K|+**(IjjZ3xWg.3vBWsTIlgbn7+5-/qeaNTmp2Z%Wk+*LiDV~T,?=YyMl*B[p>1'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '+?Qf^M[x$4c|&RM!j:|#P|_K4]}{Qm/^3j*j3|LwL6D>!|ZHEagYxcuO7cQp]0s2'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ':*Mg|m;+oC9$FQHj0t)e64{[!TI0Wh-&q1,_b.R*8tN tq&*E`p!GMH8Qke|Cvfm'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'rvI;]tcvAL4mK2+`Rn#tZq=9,sb:XTIb`FS%gK7qG3Km o9V$D|}G1L9bIe=DwT/'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'r.U:C|($DGq_YV]bFYviDOvU.BAeGgzLc.$<nvyZO[hG@ZRK-h|wfyS`)3{&}tga'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'wpW^`n+<Y{q,H`}[1q:%-U4h`djseLCMXrc~;n5O&f4)ra8RzeK;fp}[+jcNc%)1'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'o-]/O^%cepE)_kN^RKwyuh&VmmO8*-EPweaN{QzE$>bck^SJ(,80jn*{|_s?-^-*'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'PelrYRo-s!Sst[zBf1o5o4+k|R3c4mf8k](:N4iIY4|Q{(De|AYb;8m%.ePrNkEm'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

