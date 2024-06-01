function chargerCommandes() {
    $.getJSON("../../.././Scripts/JavaScript/GestionLivraison/commandes.json", function (data) {
        data.commandes.sort((a, b) => {
            return a.temps.localeCompare(b.temps);
        });

        let listeCommandes = $("#commandes");
        listeCommandes.html("");
        data.commandes.forEach(commande => {
            if (commande.statutLivraison === "fin_preparation" || commande.statutLivraison === "en_livraison") {
                let buttons = '';
                if (commande.statutLivraison === 'fin_preparation') {
                    buttons = `<button onclick="prendreCommande(${commande.id})">Prendre la commande</button>`;
                } else if (commande.statutLivraison === 'en_livraison') {
                    buttons = `<button onclick="terminerCommande(${commande.id})">Commande livrée</button>`;
                }
                let elementCommande = `
                    <div>
                        <h2>Nom : ${commande.nomClient}</h2>
                        <p>Nom du livreur : ${commande.nomLivreur} ${commande.prenomLivreur}</p>
                        <p>Heure de mise à disposition : ${commande.temps}</p>
                        <p>Statut de livraison: ${commande.statutLivraison}</p>
                        <p>Téléphone : ${commande.tel}</p>
                        <p>Adresse de la commande : </p><a href="https://www.google.fr/maps/search/${commande.adrClient}+${commande.cpClient}+${commande.vilClient}">
                            ${commande.adrClient} ${commande.cpClient} ${commande.vilClient}
                        </a>
                        <br/><br/>
                        ${buttons}
                        <hr>
                    </div>
                `;
                listeCommandes.append(elementCommande);
            }
        });
    });
}

function mettreAJourBDD(idCommande, nouveauStatut) {
    $.ajax({
        type: "POST",
        url: "../../.././Scripts/PhP/Noe/modification_commande.php",
        data: { id: idCommande, statutLivraison: nouveauStatut },
        success: function(response) {
            chargerCommandes()
            console.log("Commande mise à jour dans la base de données avec succès !");
        },
        error: function(error) {
            console.error("Erreur lors de la mise à jour de la commande dans la base de données :", error);
            alert("Une erreur s'est produite lors de la mise à jour de la commande dans la base de données.");
        }
    });
}


function actualiserCommandesBdD(data) {
    $.ajax({
        type: "POST",
        url: "../../../Scripts/PhP/Noe/chargerCommandesLivraison.php",
        data: JSON.stringify(data),
        contentType: "application/json",
        success: function(response) {
            console.log("Commandes chargées dans la BdD avec succès !");
            chargerCommandes();
        },
        error: function(error) {
            console.error("Erreur lors de la sauvegarde des commandes :", error);
            alert("Une erreur s'est produite lors de la sauvegarde des commandes sorry.");
        }
    });
}

function prendreCommande(idCommande) {

    alert(idCommande)
    let commande = listeCommandes.commandes.find(commande => commande.id === idCommande);
        alert(commande)
    if (commande) {
        if (commande.statutCde === "Acceptée") {
            mettreAJourBDD(idCommande, "en_livraison");
            actualiserCommandesBdD();
        } else {
            alert("Cette commande ne peut pas être prise car elle n'est pas fini de préparer.");
        }
    } else {
        alert("Commande non trouvée.");
    }
}

function terminerCommande(idCommande) {
alert(idCommande)
    let commande = listeCommandes.commandes.find(commande => commande.id === idCommande)
alert(commande)
    if (commande) {
        alert("Statut de livraison: " + commande.statutLivraison )
        if (commande.statutLivraison === "en_livraison") {
            mettreAJourBDD(idCommande, "livree");
            commandeEnCours = null;
            actualiserCommandesBdD();
        } else if (commande.statutLivraison === "preparation"){
            alert("toto")
        } else {
            alert("Cette commande ne peut pas être livrée car elle n'est pas en cours de livraison.");
        }
    } else {
        alert("Commande non trouvée.");
    }
}
