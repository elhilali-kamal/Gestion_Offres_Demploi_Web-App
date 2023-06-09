<?php
require('header.php')

?>


<li><a href="index.php">ACCUEIL</a></li>
<li><a href="university.php">UNIVERSITÉ</a></li>
<li><a href="formation.php">FORMATIONS</a></li>
<li><a href="espace.php">ESPACE ETUDIANT</a></li>
<li><a class="active_1" href="contact.php">CONTACT</a></li>
<li class="dropdown dropdown-large temp">
	<a href="#" class="dropdown-toggle atag" data-toggle="dropdown">PLUS<b class="caret"></b></a>

	<ul class="dropdown-menu dropdown-menu-large row col-sm-12 font_1 drop_2">
		<li class="col-sm-3">
			<ul>
				<li class="dropdown-header">UNIVERSITÉ</li>
				<li><a href="university.php"> Mot de président</a></li>
				<li class="disabled"><a> Présentation</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">FORMATIONS</li>
				<li><a href="formation.php">Formation initiale</a></li>
				<li class="disabled"><a>Formation continue</a></li>
			</ul>
		</li>
		<li class="col-sm-3">
			<ul>
				<li class="dropdown-header">ESPACE ETUDIANT</li>
				<li><a href="/">Services </a></li>
				<li class="disabled"><a>Bourses</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">CONTACT</li>
				<li><a href="">FAQ</a></li>
				<li class="disabled"><a></a></li>
			</ul>
		</li>
	</ul>
</li>
<li class="dropdown"><a href="#" data-toggle="dropdown"><span class="fa fa-search"></span></a>
	<ul class="dropdown-menu drop_1" style="min-width: 300px;">
		<li>
			<div class="row_1">
				<div class="col-sm-12">
					<form class="navbar-form navbar-left" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Recherche">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Recherche</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</li>
	</ul>
</li>
</ul>

</div>
</nav>
</div>
</section>

<section id="contact" class="clearfix" style="font-family: arial;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 contact clearfix">
				<h2><span class="boat_1">Contactez-</span> nous</h2>
			</div>
			<div class="col-sm-12 contact_1 clearfix">
				<div class="col-sm-4 contact_1_left">
					<div class="col-sm-12 contact_1_left_top clearfix">
						<div class="col-sm-4 contact_1_left_top_1">
							<p><i class="fa fa-map"></i></p>
						</div>
						<div class="col-sm-8 contact_1_left_top_2">
							<h3>Email</h3>
							<p><a href="#">communication@ucd.ac.ma</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 contact_1_left">
					<div class="col-sm-12 contact_1_left_top clearfix">
						<div class="col-sm-4 contact_1_left_top_1">
							<p class="mobile"><i class="fa fa-mobile"></i></p>
						</div>
						<div class="col-sm-8 contact_1_left_top_2 text-align-left">
							<h3>Tel</h3>
							<p>Tel : 05 23 34 44 47</p>
							<p>05 23 34 44 48</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 contact_1_left">
					<div class="col-sm-12 contact_1_left_top clearfix">
						<div class="col-sm-4 contact_1_left_top_1">
							<p><i class="fa fa-envelope"></i></p>
						</div>
						<div class="col-sm-8 contact_1_left_top_2">
							<h3>Adresse</h3>
							<p>Université Chouaib Doukkali Avenue Jabran Khalil Jabran B.P 299-24000 El jadida Grand-Casablanca Maroc</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 contact_2">
				<div class="col-sm-12 contact_2_left">
					<h2>Laissez-nous un message</h2>
					<form id="contact" method="" class="form" role="form">
						<div class="row">
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="name" name="name" placeholder="Nom complete" type="name" required="" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')">
							</div>
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="email" name="email" placeholder="Email" type="email" required="" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')" autofocus="">
							</div>
						</div>
						<textarea class="form-control_3" id="message" name="message" placeholder="Message" rows="5"></textarea>
						<br>
						<div class="row">
							<div class="col-xs-12 col-md-12 form-group text-center">
								<button class="btn btn-primary" type="submit">Envoyer</button>
							</div>
						</div>
					</form>

				</div>
</section>



<?php
require('footer.php')

?>