<?php 
$dsn = 'sqlsrv:server= DESKTOP-V2SDC4F\SQLEXPRESS;Database=shopweb;';
$user = 'sa';
$password = '82816';

$pdo = new PDO($dsn, $user, $password);

$sql = 'SELECT * FROM dbo.member';
$pre = $pdo->prepare($sql);
$pre->execute();
$row = $pre->fetchAll(2);

print_r($row);