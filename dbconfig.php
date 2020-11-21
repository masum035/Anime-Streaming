<?php
//require __DIR__.'/includes/vendor/autoload.php';
//use Kreait\Firebase\Factory;
//use Kreait\Firebase\ServiceAccount;
//
//// This assumes that you have placed the Firebase credentials in the same directory
//// as this PHP file.
//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/clientwebsiteanimefreak-firebase-adminsdk-jkzp3-5342003835.json');
//$firebase = (new Factory)
//    ->withServiceAccount($serviceAccount)
//    ->withDatabaseUri('https://clientwebsiteanimefreak.firebaseio.com')
//    ->create();
//$database = $firebase->getDatabase();
//
define("DB_HOST", "sql207.epizy.com");
define("DB_USER", "epiz_27261148");
define("DB_PASS", "qkIVKYGGStv");
define("DB_NAME", "epiz_27261148_ClientInfo");
define("DB_PORT", "3306");

global $conn;
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME,DB_PORT);

if ($conn) {
    echo "connected";
} else {
    echo "Not connected";
    die("Connection failed:".mysqli_connect_error());
}


?>