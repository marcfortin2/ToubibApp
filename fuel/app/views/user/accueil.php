<?php
           use \Model\Patients; 
           
?>

<link rel="stylesheet" href="assets/css/login.css" />
<div id="medocDiv">
    
    <button id="medocLogin" onclick="document.getElementById('id02').style.display='block'" style="width:200px;" class="btn btn-warning">Inscrivez-vous</button>

    <div id="id02" class="modal">
        
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        
        <form id="loginFormMedoc" action="usercode" method="post" class="modal-content animate">
                            
            <div id="imgCon" class="imgcontainer">
                <img src="../images/logo_toubib_tr.png" alt="Logo" class="logo" height="254px" width="208px" style="margin:23px 0 23px 75px">
            </div>
            
            <!--<div class="form-group">
                <label id="userlab"><b>Entrez votre nom d\'utilisateur</b></label>
                <input id="usertxt" type="text" name="username" placeholder="Username" class="form-control" />
            </div>
                
            <div class="form-group">
                <label id="emaillab"><b>Entrez votre adresse courriel</b></label>
                <input id="usermail" type="email" name="email" placeholder="Email" class="form-control" />
            </div>-->

            <div class="form-group">
                <label id="pswlab"><b>Veuillez entrer votre code fournie par votre clinique:</b></label>
                <input id="userpsw" type="text" name="usercode" placeholder="Code de la clinique" class="form-control" />
            </div>
                
            <div class="form-group">
                <input id="submitbtn" type="submit" name="submit" value="Soumettre" class="btn btn-lg btn-primary btn-block" />
            </div>
            
            <div id="canCon" class="container">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
                        
        </form>
    </div>
</div>
<!-- -->
<div id="patientDiv">
    <button id="patientLogin" onclick="document.getElementById('id01').style.display='block'" style="width:200px;" class="btn btn-primary">Indentifier Patients</button>
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        <form id="loginFormPatient" action="user/signin" method="post" class="modal-content animate">
            <div id="imgCon" class="imgcontainer">
                    <img src="../images/logo_toubib_tr.png" alt="Logo" class="logo" height="254px" width="208px" style="margin:23px 0 23px 75px">
            </div>
            <div class="form-group">

                <label id="userlab"><b>Code Utilisateur</b></label>
                <input id="usertxt" type="text" name="username" placeholder="Email or Username" class="form-control" />
            </div>

            <div class="form-group">
                <label id="pswlab"><b>Mot de passe</b></label>
                <input id="userpsw" type="password" name="password" placeholder="Password" class="form-control" />
            </div>

            <div class="form-group">
                <input id="submitbtn" type="submit" value="Soumettre" class="btn btn-lg btn-primary btn-block" />
            </div>
            <div id="canCon" class="container">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Oublié <a href="#">mot de passe?</a></span>
            </div>
        </form>
    </div>
</div>

<script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target === modal) {
        modal.style.display = "none";
        }
    };
</script>

<br>
<div class="container">
    <div class="row">           
        <div class='col-md-7'>
            <div style='text-align:left'>
                
                <h3><strong>Toubib Dossier médical électronique</strong></h3>
                <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
                <h4>Voici quelques avantages à l'utilisation d'un DMÉ:</h4>
                <p>Réduction du nombre d'analyses, d'examens redondants et détection des interactions médicamenteuses.</p>
                <p>Gestion plus aisée des soins préventifs  et des maladies chroniques.</p>
                <p>Communication plus facile entre l'équipe soignante, les prestateurs de soins et leurs patients.</p>
                <p>Diminution importante de la paperasse jusqu'à son élimination.</p>
                <p>Tout cela est compris dans Toubib et beaucoup plus encore...</p>
                <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />

            </div>
        </div>

    <!--$patients = Patients::all_patients();
    
    //var_dump($patients);
    echo $patients;
    //echo implode(', ', $patients[]);
    //echo 'Votre nom: '.$patients['nom'].'<br>';
    //echo'allo!';-->

        <div class='col-md-5'>

            <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD; text-align:left;" />
            <ul style='font-size:14px'>
                <li>Fiches patients professionnelles.</li>
                <li>Livre de rendez-vous détaillé.</li>
                <li>Facturation SYRA.</li>
                <li>Facturation privée.</li>
                <li>Liste de rappel.</li>
                <li>Dossier patient informatique et électronique.</li>
                <li>Prescripteur avec interactions médicamenteuses.</li>
                <li>Courbes de croissance et graphiques sur données nominales.</li>
                <li>Service Web intégré pour les inscriptions.</li>
                <li>Numérisation intégrée.</li>
                <li>Fichiers de références (gabarits).</li>
                <li>Messagerie interne instantanée.</li>
                <li>Étiquettes, fusion et publipostages.</li>
                <li>Mise à jour par Internet.</li>
                <li>Télé-intervention.</li>
                <li>Base de données SQL locale, rapide et gratuite.</li>
                <li>Résultats de laboratoire.</li>
            </ul>
            <hr style="width: 100%; color: black; height: 1px; background-color:#BDBDBD;" />
            
        </div>
    </div>
</div>