<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Delivr'Home | Créer un bon</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <!-- En tête -->
    <header>
        <h1 class="main-title">
            Delivr'Home
            <br /> Génération de bons de livraison en ligne
        </h1>
    </header>

    <!-- Formulaire de génération du bon de livraison -->
    <section id="formContainer">
        <div class="container">
            <p class="text-content">
                Bienvenue sur Delivr' Home,
                <br /> Pour générer un bon de livraison, remplissez le formulaire ci-dessous :
            </p>
        </div>

        <div class="container">
            <h2 class="title">Générer un bon de livraison</h2>
            <form action="generate-delivery-form.php" method="POST">
                <!-- 
                    A FAIRE: Compléter le formulaire afin qu'il permette de saisir 
                    les informations requises:
                    - Nom du destinataire
                    - Adresse (numero et rue)
                    - Code postal
                    - Ville
                    - Pays
                    - Commentaire
                -->
                        
                <label for="recipientNameInput">Nom du destinataire</label>
                <input type="text" name="recipient-name" id="recipientNameInput">

                <label for="recipientAdressInput">Adresse (numéro et rue)</label>
                <input type="text" name="recipient-adress" id="recipientAdressInput">

                <label for="recipientPostalCodeInput">Code Postal</label>
                <input type="number" name="recipient-postal-code" id="recipientPostalCodeInput">

                <label for="recipientCityInput">Ville</label>
                <input type="text" name="recipient-city" id="recipientCityInput">

                <label for="recipientCountryInput">Pays</label>
                <input type="text" name="recipient-country" id="recipientCountryInput">

                <label for="recipientCommentInput">Commentaire</label>
                <input type="textarea" name="recipient-comment" id="recipientCommentInput">

                <input class="submit-button" type="submit" value="Valider" />
            </form>
        </div>
    </section>
</body>

</html>