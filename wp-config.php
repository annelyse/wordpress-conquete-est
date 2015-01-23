<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'conquete de l\'est');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B?4g@WKW%h[ktLN*VFA.ah/}N6(bKCH-qeaV49DORj nvUc|r5mX&#oXq#T*,OD=');
define('SECURE_AUTH_KEY',  '-_Mv@o%;F|(ZHoegAZ@d`?K#O)mD+r.vL9.IP??J^Ez(!NCide8#5oKlUd?ce#v;');
define('LOGGED_IN_KEY',    'oIffJD#}s!3Cmp/y5GiwbBP[DV|2~O FyvI9v*T K+cbEWI xfmLCe`o4&~zQA1p');
define('NONCE_KEY',        '4{aOx?9tU0LwhJA+SU++#U+oGA#q2jNn U&;!F5r,=gqdd#Rr0Z=Rg4LJ6ZWZ{U`');
define('AUTH_SALT',        '%IoFs|J}!6urk4?uLgiPjX7}z;R7L^bW+&5) uP&#W$qkw7wIinS#M1cxdc297)C');
define('SECURE_AUTH_SALT', '{>h$;99Y7i-WU^F ?XAT~brSTTDWS~PG~=A;>t d0Xr7G9],PJXu&p5C}D?ns>XH');
define('LOGGED_IN_SALT',   'yC)Gp[OJ#*-di+x)<mRsRu84ztyg!c2DreJk+1~1xQpd%pXDv!_DMiE:J(*&[; D');
define('NONCE_SALT',       '/|M6fe+GUWaI$7dRrSixhId,]/cVvQVf yTY8Xi%4,]:39SL@.x[,kr]@`75xz#@');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wpcest_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');