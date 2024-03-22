<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Serveur MySQL (généralement localhost)
$username = "root@localhost"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "avis_stage"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully"; // Message de confirmation de connexion

// Exemple de requête SQL (sélectionner tous les enregistrements de la table "utilisateurs")
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nom: " . $row["nom"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results"; // Aucun résultat trouvé
}

// Fermer la connexion à la base de données
$conn->close();
?>
