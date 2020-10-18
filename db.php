<?php
$dsn = 'mysql:dbname=hw1;host = 127.0.0.1:8889';
$pdo = new PDO($dsn,'root','root');

function write($pdo,$sql){
    $sth = $pdo->prepare($sql);
    return $sth->execute();
}

function read($pdo,$sql){
    $sth = $pdo->prepare($sql);
    $sth->execute();

    $rows = $sth->fetchAll();
    return $rows;
}
?>


