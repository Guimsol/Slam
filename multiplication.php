<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <header>
        <div class="header-top">
            <img src="Images/logo.png" alt="Logo du site" class="logo">
            <img src="Images/header-photo.jpg" alt="Photo principale" class="header-photo">
        </div>
    </header>
    <div class="layout">
        <nav class="sidebar">
            <ul>
                <li><a href="index.php">Accueil</a></li>                  
                <li><a href="Diviseur.php">Mes Diviseurs</a></li>
                <li><a href="multiplication.php">Ma table Multiplication</a></li>
                <li><a href="fibonacci.php">Mon Fibonacci</a></li>
                <li><a href="factoriel.php">Mon Factoriel</a></li>
                <li><a href="parfait.php">Suis-je Parfait</a></li>
                <li><a href="premier.php">Suis-je Premier</a></li>           
            </ul>
        </nav>
        <main>
            <h1> Table de multiplication </h1>
            <form method="post">
                Nombre entier : <br> 
                <input type="text" name="nb"> <br> 
                <input type="submit" name="Afficher" value="Afficher">
            </form>
            <?php
            if (isset($_POST['Afficher'])) 
                {
                $nb = $_POST['nb'];
                echo "Table de multiplication pour le nombre $nb :<br>";
                for ($i = 1; $i <= 10; $i++) 
                    {
                    $resultat = $nb * $i;
                    printf("%d x %d = %d<br>", $nb, $i, $resultat);
                    }
            }
            ?>
        </main>
    </div>
    <footer>
        <p>&copy; 2025 Mon Site Web. Tous droits réservés.</p>
    </footer>
</div>
</body>
</html>