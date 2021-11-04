<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OpenServer\domains\childhood\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'childAdmin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pass' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~eYe;#r1fmncVI4F@v>cHg._/4Wimh)EVf]0sJb%%:N7.l8wID%+%K]?Gis,p$IB' );
define( 'SECURE_AUTH_KEY',  'LkUH9V1^wikXd2;:oH8G|sb+edX41Lspu;4L<8Nl}h5<~{wLC/^tpLf.*XV-1CCc' );
define( 'LOGGED_IN_KEY',    ',9 VrFW[1Oy%l/ntS.K-u)JvUb40%K5xp|%blH;hTOQL4iw{{xh:9Ari#+J?ys-s' );
define( 'NONCE_KEY',        'b0bGbUW)+:`LJ9xG}SY&v*^n)@4a(0^rM{u8osQI@B/(!Xsg8QEj2XD-zsEN|*cE' );
define( 'AUTH_SALT',        '|G#sF.-41c3}Yf[-ZrjOm5jYKF,;sev#:)]r*IM5c@zehp1*c6&PYNpSMdaFg~4`' );
define( 'SECURE_AUTH_SALT', ';ojw1GKrU2Zu)pnVCI^Z3lM*2h](Ku?)*g#IR|f&:]n6cmOQ^]^L,?bt 1 ;JB|h' );
define( 'LOGGED_IN_SALT',   'QWLyhLhu2Z?aE;8^FbzZZYU.S@,RQZa&T4@EHsDgyqK(E=b!0[Puykh<K,fn(yi,' );
define( 'NONCE_SALT',       'Ylk*7$)dP ]zwnbRE7]BN{EA1!Fhlbd9-WQQ#)}iY Z6$730Q:RS0mu*?E{Mg,QG' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
