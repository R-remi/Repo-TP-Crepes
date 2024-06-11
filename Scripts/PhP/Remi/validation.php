<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations du formulaire
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $heure_actuelle = $_POST['heure'];
    $date_actuelle = $_POST['date'];
    $coutLiv = 5.00;
    $total = floatval($_POST['total']);
    $totalTTC = $total + $coutLiv;

    require_once '..\..\..\BaseDeDonnees\codesConnexion.php';
    $pdo = BaseDeDonnees::connecterBDD('admin');

try {
    $requete1 = "INSERT INTO commande (NomClient, TelClient, AdrClient, CP_Client, VilClient, Date, HeureDispo, TypeEmbal, A_Livrer, EtatCde, EtatLivraison, CoutLiv, TotalTTC, IdLivreur)
                            VALUES ('$nom', '$tel', '$adresse', '$cp', '$ville', '$date_actuelle', '$heure_actuelle', 'Sac', 1, 'Acceptée', 'preparation', $coutLiv, $totalTTC, NULL);";
    $pdo->exec($requete1);

    echo "<br>";
    $requete2 = "SELECT NumCom FROM commande WHERE NomClient = '$nom' AND TelClient = '$tel' AND AdrClient = '$adresse' AND CP_Client = '$cp' AND VilClient = '$ville' AND Date = '$date_actuelle' AND  HeureDispo = '$heure_actuelle' AND TypeEmbal = 'Sac' AND A_Livrer = 1 AND EtatCde = 'Acceptée' AND EtatLivraison = 'preparation' AND CoutLiv = $coutLiv AND TotalTTC = $totalTTC;";
    $result = $pdo->query($requete2);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $numCom = $row['NumCom']; // on recup le num de commande pour le requete TODO MODIF LE CHIFFRE
    echo "numCom : " . $numCom;



    $requete3 = "SELECT IdProd FROM produit where IdPord ;";
    $result = $pdo->query($requete3);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $IdProd = $row['MAX(IdProd)']+1; // on recup le num de la derniere commande pour la requete 4

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $crepe => $quantity) {
        $requete4 = "INSERT INTO `detail` (`NomProd`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `DateArchiv`, `IdProd`)
                     VALUES ('$crepe', 'Base6661', 'Base2', 'Base3', 'Base4', 'Option1', 'Option2', 'Option3', 'Option4', $date_actuelle, $IdProd);";
        $pdo->exec($requete4);

        $pdo->exec($requete4);


        $requete5 = "SELECT Num_OF FROM detail WHERE NomProd = '$crepe' AND IngBase1 = 'Base6661' AND IngBase2 = 'Base2' AND IngBase3 = 'Base3' AND IngBase4 = 'Base4' AND IngOpt1 = 'Option1' AND IngOpt2 = 'Option2' AND IngOpt3 = 'Option3' AND IngOpt4 = 'Option4' AND DateArchiv = '0000-00-00' AND IdProd = $IdProd;";
        $pdo->exec($requete5);


        $Num_OF = $row['Num_OF']; // 654687


        $requete6 = "INSERT INTO com_det (Num_OF, Quant, NumCom) VALUES (:numOF, :quantity, :numCom); ";
        $stmt = $pdo->prepare($requete6);
        $stmt->execute(['numOF' => $Num_OF, 'quantity' => $quantity, 'numCom' => $numCom]);

    }
}



} catch(PDOException $e) {
   /* header("Location: ../../../HTML-CSS/Html/Commande_Remi/index.html");*/

    die("ERROR: Could not able to execute the query. " . $e->getMessage());

}}
/*header("Location: ../../../HTML-CSS/Html/Commande_Remi/index.html");*/
