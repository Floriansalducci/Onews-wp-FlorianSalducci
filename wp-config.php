<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_demo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'frI=yllzy] yCl:aC T&*_ynd Mx!rJWq6(IqVjX>p9.8en=?pNI8ToI|h>sdEck' );
define( 'SECURE_AUTH_KEY',  '6xoT55-M+n`fbG_X|@#9&.*WXzgr:+O<S D*&OA7 ;~+BL3RWy.bnaq.`7Lj|oeP' );
define( 'LOGGED_IN_KEY',    '`$~7R:w]%Kw~k $o33/ a$~`nxHfhTYyLb(@uQFx2dJ]{)jO7 A_Cg?|rg@B6I#0' );
define( 'NONCE_KEY',        'zl55<dQ+DioM+}L:B*+rISwYxT@J:7kr_P^40,/_`3H99<)NXRqz~x60qA}C&RVh' );
define( 'AUTH_SALT',        '8+iD.xf,Tb $~V;Q68!6*r7wbv)?PwT{z^CzH/A2mT*${q2^D3od)3lyG,$E.yM*' );
define( 'SECURE_AUTH_SALT', '9iMBO!D=3kVNSdU;09s,p9cn$QngmRc 6*g$_tT0!J|Xp=~!]PtgKiJ^A:%00MdY' );
define( 'LOGGED_IN_SALT',   'jZnywFy*pzXk}p:DHX+LO9rYxw^&b(s,b==AnqpH%P3^%`FL|*@mZDSM,?n|8/++' );
define( 'NONCE_SALT',       'qSDGz}J>>2M|HS)mK]uY%-xmbk!*9plQSJh2;dJ@7{@+RS5C@y}M%%`J*8oMe[{N' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);


//pour activer le téléchargement direct (et non par FTP) des fichiers
//ajouté par moi-même
define('FS_METHOD', 'direct');


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
