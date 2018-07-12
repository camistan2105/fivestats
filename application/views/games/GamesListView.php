<?php if(isset($games)): ?>

	<div class="list-group">
		<?php foreach ($games as $game): ?>
			<button type="button" class="list-group-item list-group-item-action team-list" onclick="showGameCard(this, <?= $game->id ?>, '<?= site_url('Games/get_game_data') ?>')" ><?= $game->date ?></button>
		<?php endforeach; ?>
	</div>

<?php endif; ?>