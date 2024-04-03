<?php

require_once '../../../../BaseDeDonnees/codesConnexion.php';
try {
    $connex = new PDO('mysql:host=' . HOST . ';charset=utf8;dbname=' . DATABASE.';port='.PORT, ADMIN_USER, ADMIN_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die();
}
try{
    $connex->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
    $sql = "SELECT I.NomIngred, F.NomFourn, I.SeuilStock, I.StockMin, I.StockReel, I.PrixUHT_Moyen FROM INGREDIENT I JOIN fourn_ingr FI ON I.IdIngred=FI.IdIngred JOIN fournisseur F ON FI.NomFourn=F.NomFourn;";
    $ligne = $connex->query($sql);
}
catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die();
}
$temp=array();
foreach ($ligne as $row) {
    $temp[]=$row;
}
$stocksJson = json_encode($temp);
if (file_exists("../../../JavaScript/Owen/stocks.json")) {
    unlink("../../../JavaScript/Owen/stocks.json");
}
file_put_contents("../../../JavaScript/Owen/stocks.json", $stocksJson);

?>
