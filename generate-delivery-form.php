<?php

/**
 * A FAIRE: Récuperer les informations envoyées via le formulaire
 */

$name = $_POST['recipient-name'];
$adress = $_POST['recipient-adress'];
$postal = $_POST['recipient-postal-code'];
$city = $_POST['recipient-city'];
$country = $_POST['recipient-country'];
$comment = $_POST['recipient-comment'];

$date = date('d-m-y');


$name3 = substr($name, 0, 3);
$date3 = date('dmY');

/**
 * BONUS: Filter les données reçues à l'aide de la fonction appropriée
 * afin d'empêcher la lecture des balises HTML qui pourraient avoir été
 * saisies dans le formulaire. 
 */

/**
 * A FAIRE: Générer les informations suivantes:
 * - Date du jour
 * - Numéro d'expédition composé de la manière suivante : 
 *   [3 premières lettres du destinataire en majuscule]-[ville en majuscule]–[date au format JJMMYYYY]–[2 chiffres aléatoires]
 *   Par exemple: BOC-NICE-23062022-24 
 */

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <!-- En tête -->
    <header>
        <h1 class="main-title">
            Delivr'Home
            <br /> Génération de bon livraison en ligne
        </h1>
    </header>

    <!-- Bon de livraison -->
    <section id="deliveryForm" class="container">
        <h2 class="title">Bon de livraison</h2>

        <div class="row">
            <p>N°
                <!-- A FAIRE: Afficher le numéro ici -->
                <?php echo strtoupper($name3). '-' .strtoupper($city). '-' .$date3.'-'.rand(10,99); ?>


            </p>
            <p>Généré le
                <!-- A FAIRE: Afficher la date ici -->
                <?php echo htmlspecialchars($date) ?>

            </p>
        </div>

        <div class="row">
            <div>
                <h3>Destination :</h3>
                <p>
                    <!-- A FAIRE: Afficher le destinataire ici-->

                    <?php echo htmlspecialchars($name) ?>


                </p>
                <p>
                    <!-- A FAIRE: Afficher le numéro et la rue ici -->
                    <?php echo htmlspecialchars($adress) ?>

                </p>
                <p>
                    <!-- A FAIRE: Afficher le code postal ici -->
                    <?php echo htmlspecialchars($postal) ?>

                </p>
                <p>
                    <!-- A FAIRE: Afficher la ville ici -->
                    <?php echo htmlspecialchars($city) ?>

                </p>
                <p>
                    <!-- A FAIRE: Afficher le pays ici -->
                    <?php echo htmlspecialchars($country) ?>

                </p>
            </div>
            <div>
                <h3>Provenance : </h3>
                <p>
                    DELIVR HOME LIMITED
                </p>
                <p>
                    221B Baker Street
                </p>
                <p>
                    NW1
                </p>
                <p>
                    London
                </p>
                <p>
                    England
                </p>
            </div>
        </div>

        <div class="comment">
            <p>
                <!-- A FAIRE: Afficher le commentaire ici -->
                <?php echo $comment ?>

            <p>
        </div>
    </section>
</body>

</html>