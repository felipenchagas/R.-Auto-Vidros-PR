<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'vidrospr_press' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'vidrospr_usuario' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Vidros8080!' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'InGG=E!QZPWdCB(p+xIEK:ub y(b!q9-Do`ZM/&N(`K[KQ>:V^AaJX4U]~O +PoU' );
define( 'SECURE_AUTH_KEY',  '&~q*ySH4o/M4`AsoVMQGP((kfmFS[VzX&geG<%Jyi/V|i9`08n+<.oAo37^zzx @' );
define( 'LOGGED_IN_KEY',    '/(B#C|6lbx7Wlg3tNic}-1$Grx,fsB`G|[o48cM5hGf{FR~BaAvFsBW,S)]c7nT{' );
define( 'NONCE_KEY',        '.0+sECR>&_l)5)<Z({GVn;??;M=+$wCTN2ohw6Me?:bh7O:P5 )F.g>NKwrt<t ]' );
define( 'AUTH_SALT',        '}Z: QSIc_1@)MRqOt8?#Xom[]2_g#w@bC;qB5rye7U)bs~,}X/smen;OUj0Z.5ri' );
define( 'SECURE_AUTH_SALT', 'Q5cH)Eh+f} uG[CZF_?n:`vx:#,|^_C{B^hJmzOJE6/&Q;Xa+%Ar@;=Eq^M3v#B#' );
define( 'LOGGED_IN_SALT',   '7rIQQr!X=<T)C%c-8Pi~W8Y?Hhy[u!2&*YX0NXl6=T@q`UJT7xYw21fQbes!h({N' );
define( 'NONCE_SALT',       '$A 55=c6Dbb|QjU^I{9zp0oO=R5v7F:{<9]]r.PmnGKJR/TfLoR=wGEks<MvvwC/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
