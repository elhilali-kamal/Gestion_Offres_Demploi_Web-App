<?php
require('header.php')

?>

<style>
	.row>p {
		font-size: 2em;
		font-family: 'Gill Sans', Calibri, sans-serif;
		text-align: center;
		color: rgb(15, 71, 138);
		margin: 3rem 15rem !important;
		text-align: justify !important;
	}

	.row span {
		color: rgb(20, 109, 217);
		font-style: italic;

	}

	@media screen and (max-width: 767px) {
		.row>p {
			font-size: medium;
			text-align: center;
			color: rgb(15, 71, 138);
			margin: 5px 13px !important;
		}
	}
</style>

<li><a href="index.php">ACCUEIL</a></li>
<li><a href="university.php">UNIVERSITÉ</a></li>
<li><a class="active_1" href="formation.php">FORMATIONS</a></li>
<li><a href="espace.php">ESPACE ETUDIANT</a></li>
<li><a href="contact.php">CONTACT</a></li>
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
				<li><a href="">Services </a></li>
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



<div class="trending">
	<h2 style="padding-top: 30px !important;"><span>LE CYCLE LICENCE</span></h2>
	<p style="margin: auto	 !important;"></p>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<p>Les filières de licences fondamentales sont organisées en parcours de formation. Chaque filière comporte deux parcours au moins au niveau des 5èmeet 6ème
				semestres. Les 24 modules de la Licence sont répartis en trois blocs de modules ‘’Outils‘’, ‘’Disciplinaires‘’ et ‘’Parcours’’.
				1. Un bloc de 4 modules ‘’outils’’ transversaux et transférables, étalés sur les quatre premiers semestres. Ces modules sont constitués d’enseignements de Langues, de Méthodologie du travail universitaire, des Techniques d’Expression et de Communication et d’Informatique.
				2. Un bloc de 12 à 14 modules traduisant l’ancrage ‘’disciplinaire’’ de la filière, étalés sur les semestres S1à S4et éventuellement en S5.
				3. Un bloc de 6 à 8 modules en S5et S6offrant aux étudiants deux ‘’Parcours’’ au minimum, de fin de formation Licence. Ce bloc de modules
				comporte le Projet de Fin d’Etudes et l’élément ‘’Entrepreneuriat’’</p>

		</div>
		<div class="row">

			<img src="../static/img/filierelicence.png" alt="" width="90%">
			<img src="../static/img/filierelicence3.png" alt="" width="90%">
			<img src="../static/img/filierelicence2.png" alt="" width="90%">

		</div>
	</div>


</section>



<?php
require('footer.php')

?>