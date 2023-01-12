
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>


    <?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$age = $_POST["age"];

$conn = new mysqli('localhost', 'root', 'root', 'sql_partiel');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT into inscription(nom, prenom, age) values (?, ?, ?)");
    $stmt->bind_param("sss", $nom, $prenom, $age);
    $stmt->execute();
    echo "<script>alert('Inscription reussie'); window.location='index.php'</script>";
    $stmt->close();
    $conn->close();
}

?>









</body>

</html>