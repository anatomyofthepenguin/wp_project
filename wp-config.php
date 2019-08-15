<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp_user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'test123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iwj#HjyWK#KMi:#7h,0)hQ~^w<PcAL#c.t2B2`$5z[[|L$Gw8[uZl8T8;8hg:SY3' );
define( 'SECURE_AUTH_KEY',  '^X9nnE =iIwNDCRcLEg_*O9QlaTmCgNx;!3i2C7|am{1tavTeS 5r&L|tIfP<P1S' );
define( 'LOGGED_IN_KEY',    ';15W%|kyAncAef5l#uy67%CEMC_paQcXokP2gw1Q79!s!^Ec`wfR<5R!bAKYwS-L' );
define( 'NONCE_KEY',        '5+k{mz&Iry]vYhG<RV8}B(Y&P8`BN`AGu-^?14NLd(w`LBpS!H,a:okNu?zhaq0p' );
define( 'AUTH_SALT',        ';nyB6:Pncx@))u{RK}U:Q.6~{ P8]5>@_5~v-v?$m2Eox 0PYr?Z16scRAPd+z-s' );
define( 'SECURE_AUTH_SALT', '~U6JxL,jDE|1 @%>6Iqq(E%ylC1/pDX6([Q^dF)-sTa0g vX|.O3|m)R@`R)`Nm7' );
define( 'LOGGED_IN_SALT',   't6s$R;ZR8[I4To9/r7{G-X)v598,QfflK><xZ@gr-LdB/c!W.lw+9,1ZdIh~|s:u' );
define( 'NONCE_SALT',       '`9]0tR.a&8*%`dx;=d=tiKz#}B p&Ksj]`B$o}EH?033%Gc[^D1?RBt&-4ClR|Rb' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
