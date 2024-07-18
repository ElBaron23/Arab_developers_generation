<?php
try {
    $dbpass="";
    $dbuser="root";
    $mydb= new PDO('mysql:host=localhost;dbname=arabic_generatio',$dbuser,$dbpass);   
} catch ( PDOException $e){
    echo"conection impossible";
}
?>