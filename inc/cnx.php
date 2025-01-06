<?php
// by @osmansalih (تسهيل لطريقة الاتصال بقاعدة البيانات)

// Get Confing

$site_conf = require_once ('conf.php');

$current_state = "local"; // On production Must Change To "prod"

$db_conf = $site_conf['database'][$current_state];


$host = $db_conf['host'];
$dbname = $db_conf['database'];
$dbuser = $db_conf['user'];
$dbpass = $db_conf['password'];

// You Dont Want Function To Connect Because Its Called Just 1 time 

function connectToDatabase($host, $dbname, $dbuser, $dbpass) {
    try {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage(); // I suggest Dont Return Any Output On Error I maybe its not Secured Option 
        return null;
    }
}

$mydb = connectToDatabase($host, $dbname, $dbuser, $dbpass);



