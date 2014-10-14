<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fabioschunig');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'fsc');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' ,BPk1|F(ghZG:Kiw>vd9z0oP4|,iUVndGpVXqLi4q@b2F~9(*icmw4t:A#m$[`N');
define('SECURE_AUTH_KEY',  '*#[)Dz24$0Zh2FFP7h-,YU mQnoo4Ia7?GN-,e#*OUzax[.gkW( +iOYd@1tnRcY');
define('LOGGED_IN_KEY',    ';,cCVD>T={%20*~,l)Y9E[O~zSw|Kvn/&hcnCa}}0fkg@!Y6EPV<5%hwe*6rXKS.');
define('NONCE_KEY',        '_`VghbQ91H_A(G-G[.mOl|=TRg[,1w.o`I~rKG:0pXB(?1S*PixIgc 3El.mPghZ');
define('AUTH_SALT',        ',&nRHBxpPicO9drl.%^WQjM@Y%:st`+v|v}Q7>x%0:u7`7d]0!>wVV$LJ:=j@+@Z');
define('SECURE_AUTH_SALT', 'F,sVu/.3OqT~h^sP`,jHJxg#e_@kD%R2vm,_:QsHLt+D:N ,bmZyp[5C]8<){hYu');
define('LOGGED_IN_SALT',   '9e]i209{26=2YH4h!F{GQr1[aTzP,2s-np?o$<#eMu[olO]7c,sv|K%> %3y^w0.');
define('NONCE_SALT',       'L-LvHa51H]ELs.QwHQAz1[Ups7dxZ=xzoM=/|(9?Vtl6gL,=~!`eR(dv35dN)qEh');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
