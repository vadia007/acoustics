<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'acoustics');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7bDn=%&xGqE5[q]C=KNYN=].N^[<c_B?(o^k[ARPT$(J~.1@p&Be#6yJ^QP8FYcG');
define('SECURE_AUTH_KEY',  'w]N}DkFwbz[+$?q*,E@/uDj?k^(w&EA<y65p%Zwf~3ga{:)A]Mb%~E*]pg3~e=ho');
define('LOGGED_IN_KEY',    '%}?-Zxg[9BI~O#m+zB.}U8vT<K7*qbst@,=(L$j,M6Xyn+g,o$uIH2[ZGjd6|fT7');
define('NONCE_KEY',        '-)~A!g,+})*%i+[x}Ep0A%+M;D5}(OL_FWFSaOtA37]=@AG+-|BbYp@BD,?g5]z+');
define('AUTH_SALT',        'FH8j8!y2(+h*?*q5XOWWR5YShRi@6_qN.ic$e|P#x_DA4}u2`R91@hf%a2@&/V_%');
define('SECURE_AUTH_SALT', 'ms-*^lm^f0i_P(txEs-%R^=v{uuRb*xhM(M|7Xn.LdZP.IPh{49]<+},q$^-[<aD');
define('LOGGED_IN_SALT',   '85?osVEPu+??ZQ-o_$d[vLKiQYGQ>ivK9:|uw&OcLaUIzRO8K*:YB97l3|dWJ#fs');
define('NONCE_SALT',       'k-K&g]Cc2Lc0YH.ZOo[l^XwO`rus{rp9/HUAqSgGn*BGYiL`t9bdrh*~:}DrbJQd');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
