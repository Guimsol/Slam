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
            <h1>Exercice Suite de Fibonacci</h1> 
            <p>Écrire un algorithme et un développement PHP permettant d'afficher les premiers termes de la suite de Fibonacci jusqu'à un nombre donné.</p>
            <form method="post">
             Nombre de termes de Fibonacci à afficher : <br>
             <input type="text" name="nb" required> <br>
             <input type="submit" name="Afficher" value="Afficher">
            </form>
            <?php
            if (isset($_POST['Afficher']))
                {
                $nb = $_POST['nb'];
                $a = 0;
                $b = 1;
                echo "<h2>Suite de Fibonacci (les $nb premiers termes) :</h2>";
                for ($i = 0; $i < $nb; $i++) 
                    {
                    echo $a . "<br>";
                    $temp = $a;
                    $a = $b;
                    $b = $temp + $b;
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