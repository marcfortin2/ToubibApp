<style>
	body {margin: 0;}

	ul.topnav {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    /*overflow: hidden;*/
	    background-color: #333;
	}

	ul.topnav li {float: left;}

	ul.topnav li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	ul.topnav li a:hover:not(.active) {background-color: #333;}

	ul.topnav li a.active {background-color: #333;}

	ul.topnav li.right {float: right;}

	@media screen and (max-width: 600px){
	    ul.topnav li.right, 
	    ul.topnav li {float: none;}
	}
</style>
										

<ul class="topnav"> 
	<li><a class="navbar-brand" href="accueil" style="color:white;">Toubib</a><li>

	<li><a href="accueil">Accueil</a></li>
	<li><a href="propos">À propos</a></li>
	<li><a href="assistance">Assistance</a></li>

	<?php $unConnect = "<li>".Html::anchor('toubibapp/public/connexion', 'Toubib rendez-vous')."</li>";
		  $Connect = "<li>".Html::anchor('toubibapp/public/rendez_vous', 'Toubib rendez-vous')."</li>";

	if(Auth::check()){
		echo $Connect;
	
	}
	else 
	{
		echo $unConnect;

	}?>
	<li><a href="contact">Nous joindre</a></li>
	

	<div class="navbar-collapse collapse">
		<?php if (Auth::check()): ?>
		<ul class="nav navbar-nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo e(Auth::get_screen_name()) ?> 
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<?php echo Html::anchor('toubibapp/public/user/signout', 'Déconnexion'); ?>
					</li>
				</ul>
			</li>
		</ul>
	<?php endif; ?>
	</div>
</ul>

<div id="carcont" class="container">

		<?php if (Session::get_flash('success')): ?>

			<div class="alert alert-success alert-dismissable">

				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
			</div>
			<?php endif; ?>

			<?php if (Session::get_flash('error')): ?>

			<div class="alert alert-danger alert-dismissable">

				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					
					<p>
					<?php
						echo implode('</p><p>',(array) Session::get_flash('error')); ?>
					</p>
			</div>
			<?php endif; ?>

</div>


									

<div id="toubibCarousel" class="carousel slide" data-ride="carousel">               
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container-fluid">
                <div class="col-xs-2 col-sm-1 col-md-2">
                    <img class="first-slide" src="../images/logo_toubib_tr.png" alt="Toubib 1" height="254px" width="208px" style="margin:23px 0 23px 100px"/>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <h2 style="position:absolute; left:150px; top:50px; color:white">Bienvenue chez Toubib<font size='1' >&reg;</font></h2>
                        <h3 style="position:absolute; left:150px; top:90px; color:white">Dossier médical électronique</h3>
                        <h3 style="position:absolute; left:180px; top:170px; color:white">Un seul logiciel réunissant tous les outils</h3>
                        <h3 style="position:absolute; left:180px; top:210px; color:white">nécessaires à la gestion de votre clinique médicale</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">                        
            <div class="container-fluid">
                <div class="col-xs-2 col-sm-1 col-md-2">
                    <img class="second-slide" src="../images/toubib_3_tr.png" alt="Toubib 2" height='300px' width='229px' style="margin:0px 50px 0px 100px"/>
                </div>
                <div class="text-xs-8">
                    <h2 style="position:absolute; left:520px; top:50px; color:white">Solution moderne de la pratique médicale</h2>
                    <h3 style="position:absolute; left:550px; top:90px; color:white">Notes de rédaction professionnelles</h3>
                    <h3 style="position:absolute; left:550px; top:130px; color:white">Prescripteur avec interactions médicamenteuses</h3>
                    <h3 style="position:absolute; left:550px; top:170px; color:white">Facturation, courbes de croissance, graphiques sur données nominales</h3>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="container-fluid">
                <div>
                    <img src="../images/toubib_7_tr.png" alt="Toubib7" height='300px' width='442px' style="margin:0px 0 0px 100px"/>
                </div>
                <div class="text-justify">
                    <h2 style="position:absolute; left:520px; top:50px; color:white">Connectivité DSQ</h2>
                    <h3 style="position:absolute; left:550px; top:90px; color:white">Réception électronique des résultats</h3>
                    <h3 style="position:absolute; left:550px; top:130px; color:white">Service Web intégré pour les inscriptions</h3>
                    <h3 style="position:absolute; left:550px; top:170px; color:white">Mise à jour par Internet</h3>
                </div>
            </div>    
        </div> 
        <div class="item">                        
            <div class="container-fluid">
                <div class="col-xs-2 col-sm-1 col-md-2">   
                    <img class="second-slide" src="../images/toubib_5_tr.png" alt="Toubib 3" height='300px' width='442px' style="margin:0px 0px 0px 100px"/>
                </div>
                    <div class="text-xs-8">
                    <h2 style="position:absolute; left:520px; top:50px; color:white">Logiciel médical complet et professionnel</h2>
                    <h3 style="position:absolute; left:550px; top:90px; color:white">Fiches patient, carnet de rendez-vous, messagerie,</h3>
                    <h3 style="position:absolute; left:580px; top:130px; color:white">liste de rappel, numérisation intégrée, fichiers de références...</h3>
                </div>
            </div>
        </div>
        <div class="item">                        
            <div class="container-fluid">
                <div class="col-xs-2 col-sm-1 col-md-2">
                    <img class="second-slide" src="../images/Assistance_tr.png" alt="Toubib 4" height='300px' width='442px' style="margin:0px 0px 0px 100px"/>
                </div>
                <div class="pull-xs-left">
                    <h2 style="position:absolute; left:620px; top:50px; color:white">Laissez-nous vous aider...</h2>
                    <h3 style="position:absolute; left:650px; top:90px; color:white">Télé-intervention</h3>
                    <h3 style="position:absolute; left:650px; top:130px; color:white">Cliquez sur Assistance...</h3>
                </div>
            </div>
        </div>
    </div>
</div>