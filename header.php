<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <header class="header" id="header">
      <a href="index.php" class="header__logo">
        <img src="public/images/logofineblock.png" alt="">
      </a>
  
        <ul class="header__list">
          <li class="header__list__element"><a href="index.php">Accueil</a></li>
          <li class="header__list__element"><a href="game.php">Jeu concours</a></li>
          <li class="header__list__element"><a href="partners.php">Partenaires</a></li>
          <li class="header__list__element"><a href="whitebook.php">Livre blanc</a></li>
          <li class="header__list__element"><a href="formlogin.php">Connexion</a></li>
        </ul>

        <div class="header__infos">
          <div class="tfbk">
            <p>Volume TFBK<br> au: <span id="daydate1"></span></p>
          
                <span class="important">
                    <?php
                        $host = "localhost";
                        $username = "root";
                        $password ="";
                        $database ="fineblock";
                    
                        $conn = new mysqli($host, $username, 
                        $password, $database);
          
                        $sql = "SELECT * FROM tfbk";
                        
                          if ($result=mysqli_query($conn,$sql)) {
                              $rowcount=mysqli_num_rows($result);
                          }
                      
                        $total_quantity = ($rowcount);
                        echo "4 196 000";
                      ?>
                      
                </span>
          </div>

          <div class="market_cap">
            <p>Cours estimable market cap au: <span id="daydate2"></span> </p>    
            <span class="important">
                <?php
                      $marketcap = $total_quantity/200000;
                      $marketcap_rounded = ROUND($marketcap, 4);
                      echo "20.98";
                  ?>
            </span>
          </div>
        </div>
    </div>
  </header>
  
  <section class="banner">
    <script type="text/javascript">
   
      window.addEventListener("scroll", function(){
        var header = document.getElementById("header");
        header.classList.toggle("sticky", window.scrollY >  0);             
      })
    </script>
  </section>
  </html>