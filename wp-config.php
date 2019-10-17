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
define( 'DB_NAME', 'viter' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'viter' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'paeCiesoop7kahngoo6xaengik8aiY' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1:3309' );

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
define( 'AUTH_KEY',         'G5(6OmL<!A{25URz0*lJ,fZWcXsA8ykOH]1Mn_Vf1am8EwdGp6TLf%)/z[03|3_,' );
define( 'SECURE_AUTH_KEY',  '5ay}XBYm}^E&q$S(]MOdRWXP(||KYUJP%LqE}=PeJTDry#8kCn4{:=Z6uP-[2Pql' );
define( 'LOGGED_IN_KEY',    'n.|fv6XWjKU=|KAZRC@Ofw@.yd=0LYsg;C$J+#&VMTf@wt/#TAecfOp37$ZyJ^#N' );
define( 'NONCE_KEY',        'Ug)lbm,u4j`E.0i9nA(Kt;d~oft[?1Kqr!z&|,;hszC0B1s m@5KTy+rXE0C2[<S' );
define( 'AUTH_SALT',        ']Zbeqm!4-#m}J{h<1D -(4,7rHzjRoru!w;es|YcCYOI$Zz&2NR}^K+9/8A1{S])' );
define( 'SECURE_AUTH_SALT', '.ykXS,b&#p)%pife9W5&7;1^{S.5D!.D-FxRnFv:tSvoY,k2ZEo93Ne^aGQV9Lkb' );
define( 'LOGGED_IN_SALT',   '!t8O)F# UZ2gwa[&41L$O=Hdb[YGWCK4F1jdk4>-[N*Zo?E^E5MahvH/nSLH=%av' );
define( 'NONCE_SALT',       'vzAtk3M#e^+0_*dmds_gQ9y*,H!;Nr9dRMHIaf.l_HzWTBw|I?7E(Hw3nK[To(-v' );

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
