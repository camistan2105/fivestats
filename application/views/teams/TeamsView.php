<div class="container" >
	<div class="row" >
		<div class="col-lg-12" >
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#team_creation_modal" >Ajouter une équipe</button>
			<?php include('./application/views/teams/TeamsCreationModalView.php') ?>
		</div>
	</div>	
	<div class="row" >
		<div class="col-lg-5" >
			<?php include('./application/views/teams/TeamsListView.php') ?>
		</div>
		<div class="col-lg-5" >
			<?php include('./application/views/teams/TeamsCardView.php') ?>
		</div>
	</div>
</div>