<?php if(isset($games)): ?>

	<div class="list-group">
		<?php foreach ($games as $game): ?>
			<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    			<div class="d-flex justify-content-end">
      				<small><?= date( 'd/m/Y', strtotime( $game->date ) ) ?></small>
    			</div>
				<div class="d-flex justify-content-center">
					<div class="d-flex flex-column">
						<div class="p-2 d-flex justify-content-center"><?= $game->team1_name ?></div>
						<div class="p-2 d-flex justify-content-center"><?= $game->team1_goals ?></div>
					</div>
					<div class="d-flex flex-column">
						<div class="p-2 d-flex justify-content-center">VS</div>
						<div class="p-2 d-flex justify-content-center"></div>
					</div>
					<div class="d-flex flex-column">
						<div class="p-2 d-flex justify-content-center"><?= $game->team2_name ?></div>
						<div class="p-2 d-flex justify-content-center"><?= $game->team2_goals ?></div>
					</div>
				</div>
  			</a>
		<?php endforeach; ?>
	</div>

<?php endif; ?>