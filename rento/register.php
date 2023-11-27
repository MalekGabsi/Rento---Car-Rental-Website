<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "pass123";
$baseDeDonnees = "register";

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);

    // Définir le mode d'erreur de PDO sur Exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        // Préparer la requête d'insertion
        $requete = $connexion->prepare("INSERT INTO user (nom, email, pwd) VALUES (?, ?, ?)");

        // Exécuter la requête avec les valeurs
        $requete->execute([$nom, $email, $pwd]);

        if($requete){
            header("Location: loginRegister.php");
        }
    }
} catch(PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$connexion = null;
?>
