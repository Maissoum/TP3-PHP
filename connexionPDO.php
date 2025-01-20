<?php
$hostnom = 'host=srvmysql.btssio.dedyn.io';
$usernom = 'OUMRIMA';
$password = '01102005';
$bdd = 'OUMRIMA_Biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>