<?php

$pdo = new PDO(

'mysql:host=localhost;port=3309;dbname=catalog;charset=utf8mb4',

'root',

'',

array(
\PDO::ATTR_EMULATE_PREPARES => false,
\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
)

);

?>