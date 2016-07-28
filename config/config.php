<?php
Config::set('site_name', 'Yakovenko M.');
Config::set('languages', array('en', 'ua'));
//Routes. Rout name => method prefix
Config::set('routes', array(
   'default' => '',
    'admin' => 'admin_'
));
Config::set('default_route', 'default');


Config::set('default_language', 'en');
if (isset($_POST['lang']))
{
    $_SESSION['lang'] = $_POST['lang'];
}
if(isset($_SESSION['lang'])){
    Config::set('default_language', $_SESSION['lang']);
}

Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
Config::set('db.host', 'mysql.hostinger.com.ua');
Config::set('db.user', 'u730089702_lev');
Config::set('db.password', 'ddI6egab1P');
Config::set('db.db_name', 'u730089702_lev');

Config::set('salt', '21eds23fdwe2es23');
