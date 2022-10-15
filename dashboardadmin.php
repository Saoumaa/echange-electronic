<!DOCTYPE html>

<head>
    <title>Espace Administrateur-Fineblock</title>
    
    <?php include ("meta.php"); ?>
</head>

<body>
    <div class="page">
        <?php include("header.php"); ?>

        <div class="content">
            <h1 class="content__title">
                Espace personnel administrateur
            </h1>

            <div class="content__heading">
                <p class="content__heading__text">
                    Bienvenue mr Xavier, que souhaitez vous faire ?
                </p>

                <div class="content__heading__options">
                    <ul>
                        <li>
                            <a href="https://gnou.o2switch.net:2083">
                            <i class="fas fa-envelope"></i>Messagerie</a>
                        </li>

                        <li><a href="login_out.php"><i class="fas fa-user"></i>
                        Déconnexion</a>
                        </li>                     
                    </ul>
                </div>
            </div>

            <ul class="content__options">
                <li class="content__options__element">
                    <a href="listtfbk.php">
                        <p>Consulter la liste des TFBK</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="formaddtfbk.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Ajout manuel de TFBK</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="formedittfbk.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Transfert manuel de TFBK existants</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="listbtob.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> 
                            Consulter la liste des professionnels 
                            <span class="important">(<?php
                                     $host = "localhost";
                                     $username = "root";
                                     $password ="";
                                     $database ="fineblock";
                                   
                                       $conn = new mysqli($host, $username, $password, $database);
                         
                                       $sql = "SELECT * FROM btob";
                                       
                                         if ($result=mysqli_query($conn,$sql)) {
                                             $rowcount=mysqli_num_rows($result);
                                         }
                                     
                                       $total_quantity = ($rowcount);
                                       echo $total_quantity;
                            ?>)
                            </span>
                        </p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="listbtoc.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Consulter la liste des particuliers
                            <span class="important">
                                        (<?php
                                             $sql = "SELECT * FROM btoc";
                                       
                                             if ($result=mysqli_query($conn,$sql)) {
                                                 $rowcount=mysqli_num_rows($result);
                                             }
                                         
                                           $total_quantity = ($rowcount);
                                           echo $total_quantity;
                                        ?>)
                            </span>

                        </p>
                    </a>
                </li>

                <li class="conten__options__element">
                    <a href="listgame.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Resultats jeu concours 2021</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="listwhitebook.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Commandes livre blanc</p>
                    </a>
                </li>

                <li class="content__options__element">
                    <a href="listfiliere.php">
                        <i class="fas fa-arrow-right"></i>
                        <p> Consulter la liste des filieres</p>
                    </a>
                </li>
            </ul>
        </div>

        <?php include("footer.php"); ?>
    </div>
    <script src="public/js/script.js"></script>
</body>
</html>