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
define( 'AUTH_KEY',         'K9F$lxGyBm =Bz;<3W!*cU}8XJK!/k%|Vf^G CGp|GW3E5l+}p~(;uQfiH)P=zay' );
define( 'SECURE_AUTH_KEY',  '15T>}X[}bu4dKDL`R8.GAkWtCy;`af(vGG@SfGmF=n,WwGJ;N/Bm$-SJ9V@BO)Vn' );
define( 'LOGGED_IN_KEY',    'am.V8L,2u*M!J)qNd<!&U7>-%Oy%h)l@-v)QAl}HH$(zql>Gz=e5Y|n5u,::St@(' );
define( 'NONCE_KEY',        '1h=wJ0z*ofJXxT6&.^D_E<DE3nH2_!%r&:+Um#v=61MP@x.amrZ{F4}w@A!-zM<g' );
define( 'AUTH_SALT',        't/UBi|0v)n}Qb>*t?Z/w]l3JAgnVz1#*G}F(aA:6{B^V+e?AI+kYT>bsO5V.L~|}' );
define( 'SECURE_AUTH_SALT', 'hEh%/$g]h/$SAin/Aj@)V9Z(EGZtBA1h)[}sOz @GONcIyn9lR6|47b[J^1HNO6!' );
define( 'LOGGED_IN_SALT',   '+Djh8Wk|f*Bq e6-#|;`w/w<v1&he1w,jzx[~2omNp dBDzwxV,f>2`r4Pjo*Pon' );
define( 'NONCE_SALT',       'CUQV{p#n`1AS?H+hJX:87|^xxDt&*cDG>j4^Iw5on*a{ksXm[|y,diceaO%KR3S-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_demo';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
