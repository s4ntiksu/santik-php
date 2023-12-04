<?php
// Picking language from your browser (english is default)
$systemLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Initialization language
if (!isset($_GET['language'])) {
  $selectedLanguage = $systemLanguage;
} else {
  $selectedLanguage = $_GET['language'];
}


// Your localisations (or example)
if ($selectedLanguage === 'en') {
  $name = 'Alexander Timush';
$lang = '<a href="?language=ru"><span class="material-symbols-outlined">
translate
</span></a>';
  $age = '17.5 y.o., Russia, <a href="https://ru.m.wikipedia.org/wiki/Романовка_(Саратовская_область)">Romanovka</a>';
  $title1 = 'Hello everynyan :3';
  $lastfm = 'Listening now';
  $desc1 = 'I don’t know what to put in that container, so let it be this text XD';
  $technical = 'Web page information';
  $php = 'PHP Version: ';
  $sec = 'seconds';
  $domain = 'Domain Name: ';
  $links = 'Contacts';
  $bday = 'Until the my birthday';
  $newyear = 'Until the New Year';
  $bio = 'Welcome to the main bio page :)';
  $counter = 'Total visited: ';
  $timeloaded = 'Loading time: ';
  $ping = 'Ping: ';
  $footer = 'The page is adapted only for mobile devices; the full version may not display correctly. Also, the content of the site is partially not translated. Thanks.';
  $siteonline = 'Now on the site: ';
  $humans = ' visitors';
} elseif ($selectedLanguage === 'ru') {
  $name = 'Александр Тимуш';
  $lang = '<a href="?language=en"><span class="material-symbols-outlined">
translate
</span></a>';
  $age = '17 лет, Россия, <a href="https://ru.m.wikipedia.org/wiki/Романовка_(Саратовская_область)">Романовка</a>';
  $title1 = 'Hello everynyan :3';
  $desc1 = 'Я не знаю что туда добавить в этот контейнер, поэтому пусть будет вот этот текст XD';
  $title2 = 'Языки программирования';
  $lastfm = 'Слушаю сейчас';
  $technical = 'Информация о веб-странице';
  $sec = 'секунд';
  $ms = 'мс';
  $ping = 'Пинг: ';
  $domain = 'Домен: ';
  $php = 'Версия PHP: ';
  $links = 'Контакты';
  $bday = 'До моего дня рождения осталось';
  $newyear = 'До нового года осталось';
  $bio = 'Добро пожаловать в мою страничку :)';
$counter = 'Всего посещений: ';
$timeloaded = 'Время загрузки: ';
$footer = 'Страница адаптирована только для мобильных устройств, в полной версии возможно неправильное отображение. Также частично не переведено содержимое сайта. Спасибо.';
$siteonline = 'Сейчас на сайте: ';
$humans = ' человек';
}  
// load time (google search speed be like)
$load_time = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];

// Ping
$host = 'santik.su'; // Domain name (depends on version php and server)
$ping_time = exec("ping -c 1 " . $host . " | awk -F '/' 'END {print $5}'");

$file = 'visit_count.txt'; // creating counter

// Saving session
if (!isset($_SESSION['file_processed'])) {
  // Adding session to counter file
  if (file_exists($file)) {
    $count = file_get_contents($file);
    $count = intval($count) +1;
  }
  
  // writting user to
  file_put_contents($file, $count);
  
  $_SESSION['file_processed'] = true;
} else {
  // displaying countered users
  $count = file_get_contents($file);
} ?>
