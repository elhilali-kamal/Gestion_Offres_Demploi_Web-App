<?php
require('header.php')

?>

<style>
	.row {
		padding: auto;
		font-size: 1.9em !important;
		font-family: 'Gill Sans', Calibri, sans-serif;
		text-align: center;
		color: rgb(16, 62, 132) !important;
		text-align: left !important;
		padding: 10px;
		text-align: justify !important;
		margin: 20px;

	}

	.column2 li {
		list-style-type: square;
		margin-left: 30px;

	}

	.column {
		padding: 10px;
		text-align: justify;
	}

	.mot {
		font-size: 55px;
		text-decoration: solid;
		font-weight: 500;
		text-align: center;
		font-family: Geneva, Tahoma, sans-serif;
		color: rgb(26, 192, 237);
		font-style: italic;
	}

	.name {
		padding-top: 3rem;
		color: rgb(26, 192, 237);
	}

	.president {
		width: 500px;
	}



	@media screen and (max-width: 767px) {
		.row {
			font-size: 12px !important;
			display: block !important;
		}

		.president {
			width: 100%;
			margin: auto;
		}

		.mot {
			font-size: 14px !important;
		}
	}
</style>

<li><a href="index.php">ACCUEIL</a></li>
<li><a class="active_1" href="university.php">UNIVERSITÉ</a></li>
<li><a href="formation.php">FORMATIONS</a></li>
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
	<h2 style="padding-top: 30px !important;"><span>MOT DU PRÉSIDENT</span></h2>
	<p style="margin: auto !important;"></p>
</div>

<section>
	<div class="row" style="display:flex; padding: 10px;">
		<div class="column">
			<img class="president" src="../static/img/president.png" alt="">
		</div>
		<div class="column2">
			<p>
				Nous voulons faire de l’Université Chouaïb Doukkali une institution moderne et performante au service de ses étudiants et du développement de la société. Notre vision tient compte des grands programmes nationaux dans lesquels est engagé le pays et intègre les stratégies sectorielles de développement du Grand El Jadida. Dans le projet pédagogique, trois principaux paramètres sont pris en compte :
			</p>
			<ul>
				<li>L’innovation pédagogique ;</li>
				<li>L’amélioration de la qualité des formations ;</li>
				<li>Le renforcement des dispositifs d’accompagnement des étudiants à leur arrivée, pendant, et à leur sortie de l’Université pour un meilleur rendement interne et externe.</li>
			</ul>
			<p class="mot">
				"Faire de l'UCD une institution moderne et performante"
			</p>
		</div>
	</div>
	<div class="row">
		<p>Dans le domaine de la Recherche Scientifique, nous faisons des activités de recherche scientifique, le centre de rayonnement de l’université.</p>
		<p>Nous insistons sur l’interaction de l’UCD et son environnement socio-économique dans une stratégie gagnant-gagnant en développant les axes recherche-développement et formations continues des ressources humaines. L’UCD est une composante principale du Pôle Urbain de Mazagan (PUMA). Une nouvelle dynamique est insufflée aux différentes structures d’ouverture existantes (incubateur ; interface université-entreprises ; centre de formation continue).</p>
		<p>Nous travaillons aussi à la concrétisation du ‘Pôle Technologique Mazagan’ qui regroupe des centres de recherche; l’observatoire socio-économique et la plateforme technologique. Nous poursuivrons la stratégie de leur valorisation, conjuguée au développement du système d’information et de gestion.</p>
		En termes d’infrastructures, le développement du nouveau Campus Universitaire Mazagan est une priorité pour accompagner le pôle urbain Mazagan (PUMA) à l’horizon 2030. Nous continuons à consolider les établissements existants par l’augmentation de leur capacité d’accueil, leur équipement et leur réhabilitation. Les actions de développement de l’UCD, ne peuvent être concluantes sans l’engagement et l’implication de tous les acteurs de l’université, enseignants-chercheurs, administratifs, techniciens et étudiants et des différentes composantes et structures institutionnelles, partant des Départements, en passant par les différentes Commissions concernées et Conseils et, en fin de chaîne, le Conseil de l’Université. Le rôle de nos partenaires socio-économiques ainsi que les autorités locales et des élus de la région reste un élément déterminant dans le rayonnement de l’UCD.
		<p class="name" style="text-align: right;">Yahia Boughaleb <br>

			Président de l’UCD</p>
	</div>
</section>



<?php
require('footer.php')

?>