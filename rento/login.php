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
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        // Préparer la requête de vérification du login
        $requete = $connexion->prepare("SELECT * FROM user WHERE email = ? AND pwd = ?");
        $requete->execute([$email, $pwd]);

        // Vérifier si l'utilisateur existe dans la base de données
        if ($requete->rowCount() > 0) {
            // Accès autorisé, rediriger vers la page d'accueil
            header("Location: index.php");
            exit();
        } else {
            // Identifiants incorrects, afficher un message d'erreur
            $messageErreur = "Email ou mot de passe incorrect.";
        }
    }
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$connexion = null;
?>