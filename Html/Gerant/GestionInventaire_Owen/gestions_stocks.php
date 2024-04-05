<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../../../style.css" />
  <link rel="stylesheet" href="../../../Css/Style_gestionStocks.css" />
  <title>Interface de stockage</title>
</head>

<body class="gestionStocks">
  <div id="page" class="wrapper">
    <header>
      <h1>Interface de stockage</h1>
      <nav>
        <a href="gestion_fournisseurs.php">Fournisseurs</a>
      </nav>
    </header>
    <br />
    <div id="rechercher">
      <div class="recherche"><input id="id" placeholder="ID" /></div>
      <div class="recherche"><input id="nom" placeholder="Nom" /></div>
      <div class="recherche">
        <input id="unite" placeholder="Nombre d'unité" />
      </div>
      <div class="recherche">
        <input id="stockMin" placeholder="Stock minimum" />
      </div>
      <div class="recherche">
        <input id="stockMax" placeholder="Stock maximum" />
      </div>
      <div class="recherchton" id="button_rechercher">
        <button>Rechercher</button>
      </div>
    </div>
    <br><br>

    <div id="resultat">
      <table id="stocks" class="stocks">
        <caption>Liste des stocks</caption>
        <tr>
          <th>Nom Ingrédient</th>
          <th>Fournisseur</th>
          <th>Seuil Stock</th>
          <th>Stock Min</th>
          <th>Stock Réel</th>
          <th>Prix UHT</th>
        </tr>
      </table>
    </div>
    <br />
    <div id="bas">
      <p>Inventaire en date du :</p>
      <input placeholder="Date" />
      <a href="#"><button id="rapport" class="bouton">Rapport</button></a>
    </div>
    <br /><br />
    <footer>
      <p>Interface de stockage</p>
      <script src="https://code.jquery.com/jquery-latest.js"></script>
      <script src="../../../../Scripts/JavaScript/Owen/stocks_aff.js"></script>
  </div>
</body>

</html>
