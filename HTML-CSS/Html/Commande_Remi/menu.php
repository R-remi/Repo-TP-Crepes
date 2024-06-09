<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Remi Roullet" />
    <meta name="description" content="Équipe Crêpe" />
    <meta name="robots" content="all" />
    <meta name="copyright" content="Équipe Crêpe" />
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../Css/StylePanier.css">

    <title>Équipe Crêpe</title>
    </head>
<body>
<div class="wrapper">
    <header>
        <input type="number" class="panier input" value="0" readonly >
        <img class="panier" src="../../Images/png/panier.png">

        <h1>La Crêperie</h1>
        <nav>
            <table>
                <th><a href="index.html">Accueil</a></th>
                <th><a href="#">Menu</a></th>
                <th><a href="#">Réservation</a></th>
                <th><a href="#">Contact</a></th>
            </table>
        </nav>
    </header>
    <main>
        <section id="about">
            <h2>Notre menu</h2>
            <p>A CHANGER (REDIGER PAR CHAR GPT EN 10s) Bienvenue chez [Nom de votre crêperie] ! Découvrez notre univers gourmand où chaque crêpe est une délicieuse création artisanale, alliant tradition et innovation pour ravir vos papilles.</p>
        </section>


        <form action="../../../Scripts/PhP/Remi/addToCart.php" method="post">
            <section>
                <div class="titreContent">
                    <h3>Crêpe of the day, La Crêpe Kebab : Une Fusion Culinaire Divine :</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input0" name="crepes[Crêpe Kebab]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>La crêpe kebab est une fusion exquise entre la délicatesse d'une crêpe française et la richesse des saveurs d'un kebab traditionnel. Dorée et moelleuse, la crêpe enveloppe une farce généreuse composée de viande grillée, de légumes frais et d'une sauce blanche du chef bio. Cette symphonie de saveurs offre une expérience gustative incomparable, où la douceur de la crêpe se marie parfaitement avec le piquant du kebab. Présentée avec des frites croustillantes et une touche de salade fraîche, la crêpe kebab est un délice à déguster à tout moment de la journée. Que ce soit pour une pause déjeuner rapide ou une gourmandise nocturne, elle promet une satisfaction culinaire absolue.</p>
                    <img src="../../Images/jpeg/kebab.jpg" alt="Image Crêpe Kebab">
                </div>
            </section>

            <section class="border left splited">
                <div class="titreContent">
                    <h3>La Crêpe Suzette Flambée</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input1" name="crepes[Crêpe Suzette Flambée]" class="input" value="0">
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Un spectacle en soi, la crêpe Suzette est une fusion de saveurs et de flair culinaire. Lorsque cette délectable crêpe s'affiche sur la table, elle émet un arôme d'agrumes frais et de caramelisé alléchant. Sa base légère et moelleuse est imprégnée d'un mélange succulent d'orange et de Grand Marnier, qui embrase les papilles dès la première bouchée. Enveloppée dans une légère brume de flambée, chaque crêpe Suzette est une œuvre d'art culinaire. Sa garniture généreuse de zestes d'orange confits et de sauce onctueuse crée une symphonie de saveurs sucrées et acidulées qui dansent sur le palais, laissant une impression durable.</p>
                    <img src="../../Images/jpeg/breton.jpg" alt="Crêpe Suzette">
                </div>
            </section>

            <section class="border right splited">
                <div class="titreContent">
                    <h3>La Crêpe aux Fruits de Saison et au Mascarpone</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input2" name="crepes[Crêpe aux Fruits]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Une célébration de la fraîcheur et de la simplicité, cette crêpe met en valeur les meilleurs fruits de saison avec une touche de luxe. La pâte légère et dorée est garnie d'une généreuse couche de mascarpone crémeux, qui fond délicieusement au contact des fruits fraîchement coupés. Chaque bouchée offre une explosion de saveurs, alliant la douceur naturelle des fruits à la richesse veloutée du mascarpone. Que ce soit des fraises juteuses en été, des tranches de poire pochées en automne ou des quartiers d'orange sanguine en hiver, cette crêpe s'adapte à chaque saison, offrant ainsi une expérience gustative rafraîchissante et exquise à chaque dégustation.</p>
                    <img src="../../Images/jpeg/fruitsaison.jpg" alt="Crêpe aux Fruits de Saison">
                </div>
            </section>

            <section class="border left splited">
                <div class="titreContent">
                    <h3>Crêpes aux Fruits de Mer</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input3" name="crepes[Crêpes aux Fruits de Mer]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Description : Une option salée ! Mélangez les fruits de mer cuits à la pâte à crêpes. Faites cuire et garnissez de crème fraîche et de persil frais.</p>
                    <img src="../../Images/jpeg/fruitdemer.jpg" alt="Crêpes aux Fruits de Mer">
                </div>
            </section>

            <section class="border right splited">
                <div class="titreContent">
                    <h3>Crêpes aux Épinards et Fromage</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input4" name="crepes[Crêpes aux Épinards et Fromage]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Description : Parfaites pour un repas léger. Ajoutez des épinards cuits et du fromage râpé à la pâte à crêpes. Faites cuire et savourez avec une touche de sel.</p>
                    <img src="../../Images/jpeg/epinard.jpeg" alt="Crêpes aux Épinards et Fromage">
                </div>
            </section>

            <section class="border left splited">
                <div class="titreContent">
                    <h3>Crêpes aux Pommes Caramélisées</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input5" name="crepes[Crêpes aux Pommes Caramélisées]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Description : Un délice sucré ! Faites sauter des tranches de pommes dans du beurre et du sucre brun jusqu'à ce qu'elles caramélisent. Ensuite, garnissez les crêpes avec les pommes caramélisées et saupoudrez de cannelle.</p>
                    <img src="../../Images/jpeg/pomme.jpg" alt="Crêpes aux Pommes Caramélisées">
                </div>
            </section>



            <section class="border right splited">
                <div class="titreContent">
                    <h3>Crêpes aux Champignons et Crème</h3>
                    <div class="input-group">
                        <button type="button" class="decrement">-</button>
                        <input type="number" id="input6" name="crepes[Crêpes aux Champignons et Crème]" class="input" value="0" readonly>
                        <button type="button" class="increment">+</button>
                    </div>
                </div>
                <div class="box">
                    <p>Description : Un régal rustique ! Faites revenir des champignons dans du beurre jusqu'à ce qu'ils soient dorés. Garnissez les crêpes avec les champignons et la crème fraîche. Saupoudrez de persil haché.</p>
                    <img src="../../Images/jpeg/champi.jpg" alt="Crêpes aux Champignons">
                </div>
            </section>

            <button type="submit" class="menu-button">Go to Cart</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 La Crêperie. Tous droits réservés.</p>
    </footer>
</div>
<script src="../../../Scripts/JavaScript/remi/buttonCtrl.js"></script>
</body>
</html>
