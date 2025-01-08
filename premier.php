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
            <h1> Liste des nombres premiers </h1>
            <form method="post">
                Première limite <br>
                <input type="text" name="lim1"> <br> 
                 Deuxième limite <br>
                <input type="text" name="lim2"> <br>
                <input type="submit" name="Afficher" value="Afficher">
            </form>
            <?php
            if (isset($_POST['Afficher'])) 
                {
                $lim1 = $_POST['lim1']; 
                 $lim2 = $_POST['lim2'];
                $cpt = 0; 
                for ($nb = $lim1; $nb <= $lim2; $nb++) 
                    {
                    $estPremier = 1;
                    if ($nb <= 1)  
                        {
                        $estPremier = 0;
                        }
                    for ($i = 2; $i < $nb; $i++) 
                        {
                        if ($nb % $i == 0) 
                            {
                            $estPremier = 0;
                            break;
                            }
                        }
                    if ($estPremier == 1) 
                        {
                        printf("<br> %d est un nombre premier.", $nb);
                        $cpt++;
                        }
                    }
                printf("<br> Il y a %d nombre(s) premier(s).", $cpt);
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