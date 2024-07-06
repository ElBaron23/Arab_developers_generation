<?php
try {
    $dbpass="";
    $dbuser="root";
    $mydb= new PDO('mysql:host=localhost;dbname=arabic_generation',$dbuser,$dbpass);   
} catch ( PDOException $e){
    echo"conection impossible";
}

?>