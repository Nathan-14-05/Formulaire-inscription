<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <!-- NavBar -->
    <header>
        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>            
        </ul>
        </nav>
    </header>

    <!-- Formulaire -->

    <form action="insert.php" method="GET">

        <fieldset>
            <legend>Insription</legend>
        <div>
            <label for="">Nom</label>
            <input type="text" name="nom" placeholder="Votre nom ici">
        </div> <br>
        <div>
            <label for="">Prénom</label>
            <input type="text" name="prenom" placeholder="Votre prénom ici">
        </div> <br>
        <div>
            <label for="">Tel</label>
            <input type="number" name="phone" placeholder="Votre numéro ici">
        </div> <br>
        <div>
            <label for="">Email</label>
            <input type="email" name="mail" placeholder="Votre email ici">
        </div> <br>
        <div>
            <label for="">Sexe</label>
            <input type="radio" name="gender" value="Homme"> Homme
            <input type="radio"name="gender" value="Femme"> Femme
        </div> <br>
        <button type="submit" value="Valider">Valider</button>
        </fieldset>
    </form>

</body>
</html>







