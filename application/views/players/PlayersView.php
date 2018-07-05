<div class="container" >
	<div class="row" >
		<div class="col-lg-12" >
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#player_creation_modal" >Ajouter un joueur</button>
			<?php include('./application/views/players/PlayersCreationModalView.php') ?>
		</div>
	</div>	
	<div class="row" >
		<div class="col-lg-5" >
			<?php include('./application/views/players/PlayersListView.php') ?>
		</div>
		<div class="col-lg-5" >
			<?php include('./application/views/players/PlayersCardView.php') ?>
		</div>
	</div>
</div>