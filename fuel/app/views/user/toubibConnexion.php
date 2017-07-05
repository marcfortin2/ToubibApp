<link rel="stylesheet" href="assets/css/connexion.css" />
<br>
	<h3>Veuillez vous connecter avec votre nom d'utilisateur et votre mot de passe.</h3>

	<form id="loginPatient" action="user/signin" method="post">

            <img id="imgLogo" src="../images/logo_toubib_tr.png" alt="Logo" class="logo">

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
        </form>