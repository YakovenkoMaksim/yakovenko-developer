<?php
try {
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', dirname(dirname(__FILE__)));
    define('VIEWS_PATH', ROOT . DS . 'views');

    session_start();

    require_once(ROOT . DS . 'vendor' . DS . 'autoload.php');
//require_once(ROOT . DS . 'lib' . DS . 'init.php');
    require_once(ROOT . DS . 'config' . DS . 'config.php');
    $secret = "	6LfUUhUTAAAAAKJ3SqT7Jvfj73pVCA9nIeIowaQL";
    $reCaptcha = new ReCaptcha($secret);
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    } else { $response = null;}
    $_POST["response"] = $response;

    App::run($_SERVER['REQUEST_URI']);

} catch (Exception $e) {
    echo "<h2>ERROR 404: PAGE NOT FOUND!</h2><br/>", $e->getMessage();
}
