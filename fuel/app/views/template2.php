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