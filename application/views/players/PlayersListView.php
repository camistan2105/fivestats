<?php if(isset($players)): ?>

	<div class="list-group">
		<?php foreach ($players as $player): ?>
			<button type="button" class="list-group-item list-group-item-action player-list" onclick="showPlayerCard(this, <?= $player->id ?>, '<?= site_url('Players/get_player_data') ?>')" ><?= $player->name ?></button>
		<?php endforeach; ?>
	</div>

<?php endif; ?>