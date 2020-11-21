<?php
session_start();
include ('dbconfig.php');
require __DIR__ . '/includes/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/clientwebsiteanimefreak-firebase-adminsdk-jkzp3-5342003835.json');
//$firebase = (new Factory)
//    ->withServiceAccount($serviceAccount)
//    ->withDatabaseUri('https://clientwebsiteanimefreak.firebaseio.com')
//    ->create();
$factory = (new Factory) -> withServiceAccount ('C:\xampp\htdocs\Client website\web dev project part 2\clientwebsiteanimefreak-firebase-adminsdk-jkzp3-5342003835.json');
$factory = (new Factory ()) -> withDatabaseUri ('https://clientwebsiteanimefreak.firebaseio.com');
$database = $factory->createDatabase();

function protect($string)
{
    $string = trim(strip_tags(addslashes($string)));
    return $string;
}

if (isset($_POST['create'])) {
    $flag = 1;
    $username = protect($_POST['username']);
    $phonenumber = protect($_POST['phonenumber']);
    $email = protect($_POST['email']);
    $password = protect($_POST['password']);
    $cpassword = protect($_POST['cpassword']);
    $phone_number = ctype_digit($phonenumber);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag = 0;
        $_SESSION['msg'] = 'Are you mocking with me? This is an invalid email!!' . "<br>" . "I Know cause Masum Production programmed me.";
    }
    if (!ctype_digit($_POST['phonenumber'])) {
        $flag = 0;
        $_SESSION['msg'] = "Phone number must be digit otherwise Masum Production will Delete your account";
    }
    if (strlen($_POST['phonenumber']) != 11) {
        $flag = 0;
        $_SESSION['msg'] = "You have given me wrong phone number.Masum Production programmed me !" . "<br>" . "So Give your actual phone-number";
    }
    if ($password != $cpassword) {
        $flag = 0;
        $_SESSION['msg'] = "passwords doesn't match.Fill this carefully otherwise Masum Production will be Angry and Delete your account";
    }
    if (!preg_match("#[A-Z]+#", $_POST['password'])) {
        $flag = 0;
        $_SESSION['msg'] = "Password must contain at least one capital letter otherwise Masum Production will labeled this account as vulnarable Delete your account";
    }
    if (!preg_match("#[a-z]+#", $_POST['password'])) {
        $flag = 0;
        $_SESSION['msg'] = "Password must contain at least one small letter otherwise Masum Production will labeled this account as vulnarable and Delete your account";
    }
    if (!preg_match("#[0-9]+#", $_POST['password'])) {
        $flag = 0;
        $_SESSION['msg'] = "Password must contain at least one digit otherwise Masum Production will labeled this account as vulnarable and Delete your account";
    }
    if (strlen($_POST['password']) < 8) {
        $flag = 0;
        $_SESSION['msg'] = "Set a strong password at least 8 chars/digits otherwise Masum Production will labeled this account as vulnarable.";
    }

    if($flag == 1){
//        $data = [
//            'username' => $username,
//            'phoneNumber' => $phonenumber,
//            'email' => $email,
//            'password' => $password,
//        ];
//        $ref = 'user/';
//        $postData = $database->getReference($ref)->push();

        //now cheking
        if($postData){
            $_SESSION['status'] = "Data inserted";
            header("Location : Log_In.php");
        }else{
            $_SESSION['status'] = "Data insertion failed";
            header("Location : registration.php");
        }
    }
    $signIn_time = gmdate("D, d M Y  H:i:s", time() + 6 * 60 * 60) . " GMT";
}
?>
