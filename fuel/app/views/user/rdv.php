<!-- Code pour la page Rendez-vous -->
<?php use \Model\Patients;
      use \Model\Cliniques;?>

<div id="rdvContainer" class="container">
    <h1>Page rendez-vous Toubib</h1>
    <p><font style="color:red">Assurez-vous que vos informations personnelles soient exactes.</font></p>
    <p><b>Premièrement</b>, vous devez choisir l'établissement dont vous voulez prendre rendez-vous.</p>
    <p><b>Ensuite</b>, vous choisissez la plage qui vous accomode et vous expliquez la raison de votre visite.</p>
    <p><b>Enfin</b>, vous envoyez pour confirmer le tout et recevez, par courriel, un message de confirmation de votre rendez-vous.</p>
    <br>
    <p><b><i>*Prenez note qu'un temps alloué de 2 minutes vous sera accordé pour choisir votre rendez-vous*</i></b></p>

    <?php

      $clipat = Cliniques::get_cliniquePatients();

      var_dump($clipat);

    ?>
    
    <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />

        <!--<button type="submit" class="btn btn-primary" id="conf_but" name="conf_but" id="conf_but">Confirmez</button> -->


            <div id="infoPatient">
              <h3>Voici vos information:</h3>
              
              <?php $patients = Patients::get_patients();
              //$str = implode(', ', $patients);
              //echo $str. '<br>'; 

              echo '<b>NAM:</b> '.$patients['nam'].'<br>',
              '<b>Date de naissance:</b> '.$patients['date_naissance'].'<br>',
              '<b>Prénom:</b>   '.$patients['prenom']. '<br>',
              '<b>Nom de famille</b>:  '.$patients['nom'].'<br>',
              '<b>Adresse domicile:</b> '.$patients['adresse'].'<br>',
              '<b>Ville:</b> '.$patients['ville'].'<br>',
              '<b>Province:</b> '.$patients['province'].'<br>',
              '<b>Pays:</b> '.$patients['pays'].'<br>',
              '<b>Code Postal:</b> '.$patients['postal'].'<br>',
              '<b>Téléphone maison:</b> '.$patients['telephone'].'<br>',
              '<b>Cellulaire:</b> '.$patients['cellulaire'].'<br>',
              '<b>Adresse courriel:</b> '.$patients['email'].'<br>';

              ?>
              
              </div>

              <div id="infoClinique">
                <h3>Information sur la Clinique</h3>

                <?php $cliniques = Cliniques::get_cliniques();

                echo'<b>Nom:</b> '.$cliniques['nom'].'<br>',
                '<b>Adresse:</b>'.$cliniques['adresse'].'<br>',
                '<b>Ville:</b> '.$cliniques['ville'].'<br>',
                '<b>Province:</b> '.$cliniques['province'].'<br>',
                '<b>Pays:</b> '.$cliniques['pays'].'<br>',
                '<b>Code Postal:</b> '.$cliniques['postal'].'<br>',
                '<b>Téléphone:</b> '.$cliniques['telephone'].'<br>',
                '<b>Fax</b> '.$cliniques['fax'].'<br>';
                ?>
              </div>


              <div id="cliniquesDiv">
            <label id="cliniquesLabel" for="cliniquesSelect">Choisissez parmi les établissements suivants:</label>
            
          <!-- Code du Select pour la clinique -->

            <select id="cliniquesSelect" name="cliniques">
              <option value="Choisissez une cliniques">Choisissez une cliniques</option>
             
              <?php
                /*$servername = "localhost";
      					$username = "root";
      					$password = "";
      					$dbname = "toubibwebtest";


      					$conn = new mysqli($servername, $username, $password, $dbname);
                $conn->query("SET NAMES UTF8");

    					   if($conn->connect_error)
    					     {
    						      die("Connection failed: " . $conn->connect_error);
    					     }

    					   $sql = "SELECT id, nom, ville FROM cliniques";
    					   $result = $conn->query($sql);

    					   if($result->num_rows > 0)
    					     {
    						    while($row = $result->fetch_array())
    						      {
    							       //echo "<br> id: ". $row["id"]. " - Name: ". $row["nom"] . "<br>";
                        echo "<option>" . $row['nom'] . " à " . $row['ville'] . "</option>";
    						      }
    					     }
    					     else
    					     {
    						      echo "0 results";
    					     }
    					     $conn->close();*/

                   $cliniques = Cliniques::get_cliniques();
                   echo "<option>".$cliniques['nom']." à ".$cliniques['ville']."</option>";
              ?>

        </select>

      </div>

            <!--<div id="nam" >
              <label id="namLabel" for="namInput">Votre numéro d'assurance maladie:</label>
              <input id="namInput" type="text" placeholder="Numéro d'assurance maladie">
            </div>
            <div id="activation" >
              <label id="activationLabel" for="activationInput">Votre code d'activation:</label>
              <input id="activationInput" type="password" placeholder="Code d'activation">
            </div>
            <div id"phone" >
              <label id="phoneLabel" for="phoneInput">Votre numéro de téléphone:</label>
              <input id="phoneInput" type="text" placeholder="No. téléphone">
            </div> 
          </br></br>
            <div>-->
              <div id="horaireDiv">
              <!-- Code Select pour les plages horaires -->

              <label id="horaireLabel" for="horaireSelect">Choisissez parmi les plages disponibles suivantes:</label>
              <select id="horaireSelect" multiple class="form-control" id="horaireSelect">
                  <option>10:00-10:15</option>
                  <option>11:00-11:15</option>
                  <option>13:00-13:15</option>
                  <option>14:00-14:15</option>
                  <option>15:00-15:15</option>
              </select>
            </div>  

            <!-- Test Calendrier -->
            
          </br></br>
            <div id="raisdonDiv">
              <label for="raisonBox">Raisons du rendez-vous:</label>
              <textarea class="form-control" id="raisonBox" rows="6" cols="100" placeholder="Ex: Prise de sang"></textarea>
            </div>
          </br>
          </br>
        <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
        <button id"envoyerRDV" type="submit" class="btn btn-primary">Envoyer</button>

        <h3 style='position:relative; left:300px'>Merci d'utiliser le service de rendez-vous web de Toubib</h3>
        <p style="text-align: center;"> * Veuillez vous connecter pour prendre un rendez-vous avec votre clinique.</p>
</div>