<!DOCTYPE html>

<head>
    <title>Espace personnel Particulier-Fineblock</title>
    
    <?php include ("meta.php"); ?>
</head>

<body>
    <div class="page">
        <?php include("header.php"); ?>

        <div class="content">
            <h1 class="content__title">
                Espace personnel Particulier
            </h1>

            <div class="content__heading">
                <p class="content__heading__text">
                    Bienvenue mr/mme ?
                </p>

                <div class="content__heading__options">
                    <ul>
                        <li>Total<span class="important"> 0 </span> </li>
                        <li>Valeur: <span class="important"> 0 € </span></li>
                        <li><a href="login_out.php"><i class="fas fa-user"></i>
                        Déconnexion</a>
                        </li>                     
                    </ul>
                </div>
            </div>

            <ul class="content__options">

                <li class="content__options__element">
                    <a href="">
                        <p>consulter mes pépites</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="shopbtoc.php">
                        <p>Acheter des pépites</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="">
                        <p>Mes factures</p>
                    </a>
                </li>
        </div>

        <?php include("footer.php"); ?>
    </div>

    <script src="public/js/script.js"></script>
</body>
</html>