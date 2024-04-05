<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A CHANGER</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="wrapper">
    <header>
        <h1>La Crêperie</h1>
        <nav>
            <table>
                <caption hidden>Description of the table</caption>
                <th><a href="#">Accueil</a></th>
                <th><a href="Html/Commande_Remi/menu.html">Menu</a></th>
                <th><a href="#">Réservation</a></th>
                <th><a href="#">Contact</a></th>
            </table>
        </nav>
    </header>
    <main>
        <section id="about">
            <h2>À propos de nous</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nunc id aliquet
                ultrices, velit nunc tincidunt nisl, vel lacinia nunc nunc id nunc.</p>
        </section>

        <section id="menu">
            <h2>Notre menu</h2>
            <ul>
                <li>Crêpe sucrée</li>
                <li>Crêpe salée</li>
                <li>Crêpe spéciale</li>
            </ul>
        </section>

        <section id="reservation">
            <h2>Réservation</h2>
            <form>
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Heure:</label>
                <input type="time" id="time" name="time" required>

                <button type="submit">Réserver</button>
            </form>
        </section>

        <section id="contact">
            <h2>Contactez-nous</h2>
            <form>
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2022 La Crêperie. Tous droits réservés.</p>
    </footer>
</div>  <!-- wrapper -->

</body>
</html>
