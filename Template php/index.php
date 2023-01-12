<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>

<!-- Je suis parvenu a entrer une donnée dans la base de donnée, mais suite à cela, je n'ai plus réussi à y accéder et n'est pas trouver la cause -->



    </div>

    <?php 
    session_start();
    if (empty($_SESSION['nom'])) {
        $nom=$_SESSION['nom'];
      
 header("location:index.php");}  //En enlevant la baslise Header, l'accès est rétabli cependant, je ne peux toujours pas retourner au ajouter, je vais cependant prendre soin d'envoyer un screen de la bdd
                                


?>
</body>

</html>