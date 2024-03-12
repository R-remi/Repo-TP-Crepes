<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion des fournisseurs</title>
        <link rel="stylesheet" href="../../style.css">
        <style>
            a {
                color: white;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
        <header>
            <h1>Gestion des Fournisseurs</h1>
            <nav>
                <a href="gestions_stocks.php">Gestion des stocks</a>
            </nav>
        </header>
            <div id="rechercher">
                <div class="recherche"><input id="nom" placeholder="Nom"></input></div>
                <button id="rechercher">Rechercher</button>
            </div>
            <div id="resultat">
                <h2>Gestion des fournisseurs</h2>
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>Leclerc</td>
                        <td>1 rue de la République</td>
                        <td>01 02 03 04 05</td>
                        <td>leclerc@leclerc.fr</td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="bas">
            <a href="#"><button id="rapport" class="bouton">Rapport</button></a>
            <a href="#"><button id="ajouter" class="bouton">Ajouter</button></a>
            <a href="#"></a><button id="modifier" class="bouton">Modifier</button>
            <a href="#"></a><button id="supprimer" class="bouton">Supprimer</button>
        </div>
        <footer>
            <p>Interface de stockage</p>
        </footer>
    </div>
    </body>
</html>