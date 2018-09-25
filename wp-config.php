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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tchelotattoo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'password');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Yw{j.iE6:MY=bUK[,gquFikf X4uow;rp48,B=(t4O@W!2g99h]0~7]Q6bNF?b<B');
define('SECURE_AUTH_KEY',  'Slnk,tq}ek(|DwC2fbW#J]b]:?`41Ba#D,L^O#8,%;DEQ~LAzlCq9S.jGrmi*$@q');
define('LOGGED_IN_KEY',    'w~^45Qmx`l=2J&jLdxC:C)Bcg0oV?9t`f ^0[0bCKKdlR/MY7rd9~Ro{gr5#J,cX');
define('NONCE_KEY',        '(&_Tt.fujC?I,Y_HRqZH(A%ioAT[ub809c#|?pn]&7I{MizA6Q>iI:~ED<J]ODyO');
define('AUTH_SALT',        '-5I]I.fBIQoPcfh;w.!Y2Ig-2$nK)@ .iB6yYZ50G4#+8|.K|4:JroOr:f(J+Ulo');
define('SECURE_AUTH_SALT', 'c=D)NnUp<s`}KBN#.dz:B+9-49nr0HVagTY9M8O!el8o*9i2G?^%P;2n^0cD]kL!');
define('LOGGED_IN_SALT',   '%LuJBOPsp3^*};yI`=AcoNKTQk[N<{|&PYExd[9}i!%|x%8.q-E0;VgfS0#^&#_N');
define('NONCE_SALT',       'RKKC$%L[Z7.bv5m~ux_C.01ZQNXn5&ei2`{BI (UD38#P-3l`PuP=vy#A,nO7f)E');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_tattoo_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
