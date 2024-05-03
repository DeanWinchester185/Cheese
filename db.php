<?php
    $HOST = 'localhost';
    $DBNAME = 'comment';
    $USER = 'root';
    $PASSWORD = '';
try {
    $db = new PDO("mysql:host=$HOST;dbname=$DBNAME", $USER, $PASSWORD);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "set names 'utf8'");
} 
catch (PDOException $e) {
    print "Error: " . $e->getMessage();
    die();
}
?>