<?php
require('header.php')

?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	img {
		box-shadow: 0px 5px 25px 9px rgba(189, 189, 189, 0.541);
		transition: all .5s ease-in;


	}

	img:hover {
		cursor: pointer;
		opacity: 0.8;
		transform: scale(1.1);
	}

	.postuler,
	.back {
		font-family: inherit;
		font-size: 20px;
		background: rgb(72, 180, 227);
		color: white;
		padding: 0.7em 1em;
		margin: auto;
		position: absolute;
		bottom: 19px;
		right: 0;
		left: 0;

		display: flex;
		align-items: center;
		justify-content: center;
		border: none;

		border-radius: 20px;
		overflow: hidden;
		transition: all 0.2s;
	}

	button span {
		display: flex;
		margin-left: 10px;
		transition: all 0.3s ease-in-out;
		text-align: center;
	}

	button svg {
		display: flex;
		transform-origin: center center;
		transition: transform 0.3s ease-in-out;
		text-align: center;
	}

	button:hover .svg-wrapper {
		animation: fly-1 0.6s ease-in-out infinite alternate;
	}

	button:hover svg {
		transform: rotate(45deg) scale(1.1);
	}

	button:hover {
		transform: scale(1.07);
	}

	button:active {
		transform: scale(0.95);
	}

	@keyframes fly-1 {
		from {
			transform: translateY(0.1em);
		}

		to {
			transform: translateY(-0.1em);
		}
	}

	p {
		font-size: 18px !important;
		color: #101749 !important;
		text-align: center !important;
		padding-left: 22px !important;
		padding-right: 22px !important;




	}

	h2 {
		color: rgb(60, 194, 238);
		padding-bottom: 20px !important;
		padding-top: 20px !important;

	}


	.scene {
		display: inline-block;
		width: 700px;
		height: 800px;
		margin: auto;
		perspective: 200px;
	}

	.card2 {
		position: relative;
		width: 100%;
		height: 100%;
		transform-style: preserve-3d;
		transform-origin: center right;
		transition: transform 1s;
	}

	@media screen and (max-width: 767px) {
		.row .column {
			display: block;
		}

		.scene {
			display: block;
			max-width: 78vw;

		}

		.postuler {

			position: relative;
			height: 50px;
			max-width: 70%;
		}

		p {
			font-size: 11px !important;
			width: 100%;
			height: auto;
		}

	}


	.card2.is-flipped {
		transform: translateX(-100%) rotateY(-180deg);
	}

	.card__face {
		position: absolute;
		width: 100%;
		height: 100%;
		color: white;
		text-align: center;
		font-size: 10px;
		backface-visibility: hidden;
	}

	.card__face--front {
		background: transparent
	}

	.card__face--back {
		background: transparent;
		transform: rotateY(180deg);
	}


	.wrapper {
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: transparent !important;
		box-shadow: none !important;

	}

	.registration_form {
		border-radius: 5px;
		width: 90%;
		line-height: 40px;
		padding: 25px;

	}

	.registration_form .title {
		text-align: center;
		font-size: 25px;
		text-transform: uppercase;
		color: white;
		background: rgb(46, 173, 241);
		letter-spacing: 2px;
		font-weight: 700;
		margin-top: -25px;
		margin-left: -25px;
		margin-right: -25px;
	}

	.form_wrap {
		margin-top: 35px;

	}

	.form_wrap .input_wrap {
		margin-bottom: 15px;
	}

	.form_wrap .input_wrap:last-child {
		margin-bottom: 0;
	}

	.form_wrap .input_wrap label {
		display: block;
		margin-bottom: 3px;
		font-size: 20px;
		color: #0b609c;
	}



	.form_wrap input {
		width: 100%;
		border-radius: 3px;
		border: 1.3px solid #9597a6;
		padding: 10px;
		outline: none;
		color: #1a1a1f;
		font-size: 18px;
	}

	.form_wrap input::placeholder {
		color: rgba(0, 0, 0, 0.5);
	}

	.form_wrap input[type="text"]:focus {
		border-color: #063abd;
	}

	.form_wrap ul {
		border: 1px solid rgb(115, 185, 235);
		width: 70%;
		background: rgb(206, 238, 242);
		margin-left: 15%;
		padding: 8px 10px;
		border-radius: 20px;
		display: flex;
		justify-content: center;
	}

	.form_wrap ul li:first-child {
		margin-right: 15px;
	}

	.form_wrap ul .radio_wrap {
		position: relative;
		margin-bottom: 0;
	}

	.form_wrap ul .radio_wrap .input_radio {
		position: absolute;
		top: 0;
		right: 0;
		opacity: 0;
	}

	.form_wrap ul .radio_wrap span {
		display: inline-block;
		font-size: 17px;
		padding: 3px 15px;
		border-radius: 15px;
		color: #101749;
	}

	.form_wrap .input_radio:checked~span {
		background: #105ce2;
		color: white;
	}

	.form_wrap .submit_btn {
		width: 100%;
		background: #0d6ad7;
		padding: 10px;
		border: 0;
		color: white;
		font-size: 17px;
		border-radius: 3px;
		text-transform: uppercase;
		letter-spacing: 2px;
		cursor: pointer;
	}

	.form_wrap .submit_btn:hover {
		background: #051c94;
	}


	input[type=file] {
		width: 100%;
		max-width: 100%;
		color: #444;
		font-size: 18px;
		padding: 5px;
		background: #fff;
		border-radius: 10px;
		border: 1px solid #555;
	}

	input[type=file]::file-selector-button {
		margin-right: 20px;
		border: none;
		background: #089bdf;
		padding: 10px 20px;
		border-radius: 10px;
		color: #fff;
		cursor: pointer;
		transition: background .2s ease-in-out;
	}

	input[type=file]::file-selector-button:hover {
		background: #2090c9;
	}
</style>

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
				<li><a href="">Formation initiale</a></li>
				<li class="disabled"><a>Formation continue</a></li>
			</ul>
		</li>
		<li class="col-sm-3">
			<ul>
				<li class="dropdown-header">ESPACE ETUDIANT</li>
				<li><a href="">Services</a></li>
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
	<h2 style="padding-top: 30px !important;"><span>Annonce</span></h2>
	<p style="margin: auto !important;"></p>
</div>

<section id="contribute">
	<div class="container-fluid">
		<div class="row" style=" padding: 40px;">
			<div class="column" style="padding: 20px;">

				<a href="../static/img/<?php if (isset($_GET['annonce'])) {
											echo $_GET['annonce'];
										} ?>" target="_blank">
					<img class="offer" src="../static/img/<?php if (isset($_GET['annonce'])) {
																echo $_GET['annonce'];
															} ?>" alt=""></a>
			</div>

			<div class="column" style=" position: relative;">
				<div class="scene scene--card">
					<div class="card2" id="card2">
						<div class="card__face card__face--front">
							<h2>Conditions d’accès :</h2>
							<p> Le concours est ouvert aux candidats de nationalité Marocaine titulaires :
								D'un diplome de technicien spécialisé délivré par les instituts de formation professionnel conformément au décret
								n°2.86.325 du 8 Joumada 1 1407 ( 9 janvier 1987 ) portant statut général des établissements de formation professionnelle ou un diplome
								équivalent conformément au décret n°2.12.90 du 8 Joumada 2 1433 ( 30 avril 2012 ) et agés de 18 ans au moins et de 40 ans au plus
								et jusqu'a 45 ans en cas de validation des années pouvant etre comptabilisées pour la retraite ( cette condition no concerne pas les fonctionnaire )

							<h2>Dossie de Candidature :</h2>

							<p>- Une demande adressée au Directeur de l'Ecole;</p>
							<p>- Deux copies légalisées de la carte d'identité nationale</p>
							<p>- Deux copies légalisées des extraits d'actes de naissance récents</p>
							<p>- Un exemplaire du curriculum vitae</p>
							<p>- Deux copies légalisées du diplome ou de l'attestation demandée</p>
							<p>- Deux copies légalisées de l'arreté d'équivalence ( pour les titualaires d'un diplome reconnu équivalent )</p>
							<p>- Une attestation de l'administration pour participer aux concours (concernant les fonctionnaires) </p>
						</div>
						<div class="card__face card__face--back">
							<div class="wrapper">
								<div class="registration_form">
									<div class="title">
										Formulaire
									</div>

									<form action="../controller.php" method="POST" enctype="multipart/form-data">
										<div class="form_wrap">
											<div class="input_grp">
												<div class="input_wrap">
													<label for=""></label>
													<input name="id" type="text" id="id" value="<?php if (isset($_GET['id'])) {
																									echo $_GET['id'];
																								} ?>" hidden>
												</div>


												<div class="input_wrap">
													<label for="">Nom complet</label>
													<input name="nomComplet" type="text" id="nomComplet" required>
												</div>

											</div>
											<div class="input_wrap">
												<label for="email">Email</label>
												<input name="email" type="email" id="email" placeholder="exemple@gmail.com" required>
											</div>

											<div class="input_wrap">
												<label for="telephone">Telephone</label>
												<input name="telephone" type="tel" pattern="[0-9]{10}" placeholder="ex: 0612345678" id="telephone" required>
											</div>
											<div class="input_wrap">
												<label for="">Lettre de motivation</label>
												<input name="lettre" type="file" accept="image/*,.pdf" required>
											</div>
											<div class="input_wrap">
												<label for="">CV</label>
												<input name="cv" type="file" accept="image/*,.pdf" required>
											</div>

										</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<button class="postuler" style="width:80%;" id="postuler" type="button" onclick="showForm()">
					<div class="svg-wrapper-1">
						<div class="svg-wrapper">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
								<path fill="none" d="M0 0h24v24H0z"></path>
								<path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
							</svg>
						</div>
					</div>
					<span>Postuler</span>
				</button>
				</form>

				<button class="back" style="width:15%; margin-left:30px; background: #39d9f5;font-size:29px !important; visibility:hidden; " id="back" onclick="removeBtn()">

					<p class="fa fa-arrow-left" style="color:white !important; height:100%;"></p>
				</button>
			</div>

		</div>




</section>


<div id="toast">
	<div class="far fa-bell" id="img"></div>
	<div id="desc">A notification message..</div>
</div>




<?php
require('footer.php')

?>


<script>
	var cards = document.getElementById("card2");
	var button = document.getElementById("postuler")

	function showForm() {
		cards.classList.toggle("is-flipped");
		var buttonP = document.getElementById('postuler');
		button.style = "width:65%;margin-right:30px"
		document.getElementById("back").style.visibility = "visible";
		document.getElementById('postuler').setAttribute("onclick", "post()");


	}

	function removeBtn() {
		cards.classList.toggle("is-flipped");
		document.getElementById("back").style.visibility = "hidden";
		document.getElementById('postuler').style.width = "80%";
		document.getElementById('postuler').setAttribute("onclick", "showForm()");


	}

	function post() {
		document.getElementById('postuler').setAttribute("name", "postuler");
		document.getElementById('postuler').setAttribute("type", "submit");
	}



	function launch_toast() {
		var x = document.getElementById("toast");
		x.className = "show";
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 5000);

	}


	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {
			myIndex = 1
		}
		x[myIndex - 1].style.display = "block";
		setTimeout(carousel, 2000);
	}
</script>