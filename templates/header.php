<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="pageContenuPrivé.php">Page contenu privé</a></li>

            <?php if(isset($_SESSION['pseudo'])) : ?>
                <li> Bonjour <?= $_SESSION['pseudo'] ?>
                <li><a href="/controllers/logout.php">Me déconnecter</a></li> 
            <?php else : ?>
                <li><a href="meconnecter.php">Me connecter</a></li>
            <?php endif ?>


        </ul>
    </nav>
</header>
