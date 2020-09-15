<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'divHairGence' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/*** FTP login settings ***/
define( 'FTP_HOST', 'localhost');
define( 'FTP_USER', 'tarik');
define( 'FTP_PASS', '!stratien86%'); 

define('FS_METHOD', 'direct');
/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MR}Fuu,Y/e};O:IiBzKYE;]2n7m>Q+[_LMyvdGzkZ>yKO<7`C/aj{=5,:)~/Z?y|' );
define( 'SECURE_AUTH_KEY',  'a_Tl/XH =0~&xK^M_,Q<imv77u~sqC}s3hm3u7a]DT4^!FL~-?A1QW!z`)T]6+A,' );
define( 'LOGGED_IN_KEY',    ',RBy9=lwh{K4+k]]lGE_)]>(:2.QNkF*i`~kU[]VjjkVm,hC+&ALhQ+hs#$r#}3X' );
define( 'NONCE_KEY',        '0I*oUI;=jN~CFXeunt?N-`F|z7|tX<`M6p6PpNPSR>06<~(^43FQ$yu;B<%@CWl4' );
define( 'AUTH_SALT',        'hYWKvrx+fF!|[t}8mJpxJ3ogxIc5!`z<xg7Q).y9DVV[I-$6`8KtM#2$-o`I;G6c' );
define( 'SECURE_AUTH_SALT', '#^Tv]|=<@[;P+x8v#JeY4KDO6%*!$Z&kmVE1(~o!87?DUC#A+zxTPs>UDZ3B:h*s' );
define( 'LOGGED_IN_SALT',   'rar3%^o+X<Buk6b,L([wANfmQ-{}mc_nih6OE.lq!+x,t36go39gWJnW(#]z45>]' );
define( 'NONCE_SALT',       'k4ei/X&{+~nXMUG_l>Mq7^ol5:<OWZ/H/E1dRWCZWKyT=`lEq.yzI7nF_(mwun(Q' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_4';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
