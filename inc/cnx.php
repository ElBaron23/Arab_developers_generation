<?php
// by @osmansalih (تسهيل لطريقة الاتصال بقاعدة البيانات)
$host = 'localhost';
$dbname = 'arabic_generation';
$dbuser = 'root';
$dbpass = '';

function connectToDatabase($host, $dbname, $dbuser, $dbpass) {
    try {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
        return null;
    }
}

$mydb = connectToDatabase($host, $dbname, $dbuser, $dbpass);
?>
