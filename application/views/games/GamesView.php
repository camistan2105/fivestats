<div class="container" >
	<div class="row" >
		<div class="col-lg-12" >
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#game_creation_modal" >Ajouter un match</button>
			<?php include('./application/views/games/GamesCreationModalView.php') ?>
		</div>
	</div>	
	<div class="row" >
		<div class="col-lg-5" >
			<?php include('./application/views/games/GamesListView.php') ?>
		</div>
		<div class="col-lg-5" >
			<?php include('./application/views/games/GamesCardView.php') ?>
		</div>
	</div>
</div>