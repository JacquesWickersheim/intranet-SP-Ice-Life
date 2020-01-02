<!DOCTYPE html>
<html>
	<?php include 'include/fonction_sp.php'?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<title>Sapeurs Pompiers</title>	
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-danger">
				<a class="navbar-brand" href="#">ARTEMIS</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="sapeur_pompier.html">Accueil</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="bilan_sp.php">Bilan Sapeur Pompiers</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="bilan_samu.php">R&egrave;glement SAMU/SMUR</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<section class="container-fluid bg-dark text-light">
		<section class="container">
			<div class="row">
				<div class="col-md-12 text-center mt-2">
					<h2 class="text-warning text-center py-5">Bilans M&eacute;dicaux</h2>
				</div>
				<div class="col-md-12 text-center mt-5 text-light">
					<p>Vous pouvez ici enregister un Bilan m&eacute;dical!</p>
				</div>
				<div class="col-md-12 text-center text-light">
                	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  		Enregistrer une plainte
					</button>
				</div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-dark">
                        <h5 class="modal-title" id="exampleModalLabel">Bilan m&eacute;dical</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body bg-secondary">
                      	<form method="POST">
                      		<label class="text-center">Nom</label>
								<input class="form-control" id="inserer" name="nom">
							<label class="text-center">Pr&eacute;nom</label>
								<input class="form-control" id="inserer" name="prenom">
							<label class="text-center">Age</label>
								<input class="form-control" id="inserer" name="date" placeholder="jj/mm//aa">
							<label class="text-center">Sexe</label>
								<input class="form-control" id="inserer" name="sexe" placeholder="M/F">
							<label class="text-center">Adresse</label>
								<input class="form-control" id="inserer" name="adresse_victime">
							<label class="text-center">Personne Accompagn&eacute;e</label>
								<input class="form-control" id="inserer" name="accompagnee" placeholder="Oui/Non">
							<label class="text-center">Date</label>
								<input class="form-control" id="inserer" name="date_inter" placeholder="Date de l'intervention">
							<label class="text-center">Numéro de Bilan</label>
								<input class="form-control" id="inserer" name="numero_bilan">
							<label class="text-center">Groupe Horaire</label>
								<input class="form-control" id="inserer" name="heure" placeholder="hh:mm">
							<label class="text-center">D&eacute;tresse Vitale</label>
								<input class="form-control" id="inserer" name="dvitale" placeholder="Etouffement...">
							<label class="text-center">Mode d'arriv&eacute;e</label>
								<input class="form-control" id="inserer" name="mode_arrivee">
							<label class="text-center">Bilan Neurologique</label>
								<input class="form-control" id="inserer" name="bilan_neuro" placeholder="Oui/Non">
							<label class="text-center">Bilan Circulatoire</label>
								<input class="form-control" id="inserer" name="bilan_circu" placeholder="pouls...">
							<label class="text-center">Bilan Ventilatoire</label>
								<input class="form-control" id="inserer" name="bilan_vent" placeholder="%">
							<label class="text-center">Gestes effectu&eacute;s</label>
								<input class="form-control" id="inserer" name="gestes">
							<label class="text-center">Bilan l&eacute;sionnel</label>
								<input class="form-control" id="inserer" name="bilan_lesion">
							<label class="text-center">Plaintes de la Victime</label>
								<input class="form-control" id="inserer" name="plaintes">
							<label class="text-center">Ant&eacute;c&eacutes;dents</label>
								<input class="form-control" id="inserer" name="maladies" placeholder="Maladies...">
							<label class="text-center">Observations</label>
								<input class="form-control" id="inserer" name="observation">
							<label class="text-center">Mode de Sortie</label>
								<input class="form-control" id="inserer" name="mode_sortie">
							<label class="text-center">Destinaton</label>
								<input class="form-control" id="inserer" name="destination">
							<label class="text-center">Groupe horaire</label>
								<input class="form-control" id="inserer" name="horaire_sortie">
							<label class="text-center">Equipage</label>
								<input class="form-control" id="inserer" name="equipage">
                      	</div>
                      	<div class="modal-footer bg-dark">
                        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        	<button id="valider_plainte" type="submit" class="btn btn-primary">Valider</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
			</div>
		</section>
	</section>
		<section class="container-fluid">
			<div class="row">
				<div class="table table-responsive d-flex justify-content-center">
					<table class="table table-hover table-danger">
						<tr class="text-center">
							<th class="table-danger">Nom de la Victime</th>
							<th class="table-success">Pr&eacute;nom</th>
							<th class="table-warning">Age</th>
							<th class="table-primary">Sexe</th>
							<th class="table-danger">Adresse</th>
							<th class="table-success">Accompagnement de la Victime</th>
							<th class="table-warning">Date</th>
							<th class="table-primary">Num&eacute;ro Bilan</th>
							<th class="table-danger">Heure d'intervention</th>
							<th class="table-success">D&eacute;tresse Vitale</th>
						</tr>
						<?php 
						     $reponse = $db->query('SELECT * FROM bilan');
						     while ($sp = $reponse->fetch()){
						?>
						<tbody>
							<td class="text-center table-danger"><?php echo $sp['nom']?></td>
							<td class="text-center table-success"><?php echo $sp['prenom']?></td>
							<td class="text-center table-warning"><?php echo $sp['date']?></td>
							<td class="text-center table-primary"><?php echo $sp['sexe']?></td>
							<td class="text-center table-danger"><?php echo $sp['adresse_victime']?></td>
							<td class="text-center table-success"><?php echo $sp['accompagnee']?></td>
							<td class="text-center table-warning"><?php echo $sp['date_inter']?></td>
							<td class="text-center table-primary"><?php echo $sp['numero_bilan']?></td>
							<td class="text-center table-danger"><?php echo $sp['heure']?></td>
							<td class="text-center table-success"><?php echo $sp['dvitale']?></td>
						</tbody>
						<?php }?>
					</table>
				</div>
			</div>
		</section>
		<section class="container-fluid">
			<div class="row">
				<div clas="table table-responsive d-flex justify-content-center pt-5">
					<table class="table table-danger">
						<tr class="text-center">
							<th class="text-center table-danger">Mode d'arriv&eacute;e</th>
							<th class="text-center table-success">Bilan Neurologique</th>
							<th class="text-center table-warning">Bilan Circulatoire</th>
							<th class="text-center table-primary">Bilan Ventilatoire</th>
							<th class="text-center table-danger">Gestes effectu&eacute;s</th>
							<th class="text-center table-success">Bilan l&eacute;sionnel</th>
							<th class="text-center table-warning">Plaintes de la Victime</th>
							<th class="text-center table-primary">Ant&eacute;c&eacute;dents</th>
							<th class="text-center table-danger">Observations</th>
							<th class="text-center table-success">Mode de Sortie</th>
							<th class="text-center table-warning">Destination</th>
							<th class="text-center table-primary">Groupe Horaire de Retour</th>
							<th class="text-center table-danger">Equipage</th>
						</tr>
						<?php $rep = $db->query('SELECT * FROM bilan');
						      while ($spp = $rep->fetch()) {
						?>
						<tbody>
							<td class="text-center table-danger"><?php echo $spp['mode_arrivee']?></td>
							<td class="text-center table-success"><?php echo $spp['bilan_neuro']?></td>
							<td class="text-center table-warning"><?php echo $spp['bilan_circu']?></td>
							<td class="text-center table-primary"><?php echo $spp['bilan_vent']?></td>
							<td class="text-center table-danger"><?php echo $spp['gestes']?></td>
							<td class="text-center table-success"><?php echo $spp['bilan_lesion']?></td>
							<td class="text-center table-warning"><?php echo $spp['plaintes']?></td>
							<td class="text-center table-primary"><?php echo $spp['maladies']?></td>
							<td class="text-center table-danger"><?php echo $spp['observation']?></td>
							<td class="text-center table-success"><?php echo $spp['mode_sortie']?></td>
							<td class="text-center table-warning"><?php echo $spp['destination']?></td>
							<td class="text-center table-primary"><?php echo $spp['horaire_sortie']?></td>
							<td class="text-center table-danger"><?php echo $spp['equipage']?></td>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<section class="container-fluid bg-danger">
			<section class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Ice Life - Sapeurs Pompiers - Propuls&eacute; par Jacques Blake</p>
					</div>
				</div>
			</section>
		</section>
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	</body>
</html>