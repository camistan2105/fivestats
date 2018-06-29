<?php if(isset($teams)): ?>

	<div class="list-group">
		<?php foreach ($teams as $team): ?>
			<button type="button" class="list-group-item list-group-item-action" onclick="showTeamCard(<?= $team->id ?>, '<?= site_url('TeamsController/get_players') ?>')" ><?= $team->name ?></button>
		<?php endforeach; ?>
	</div>

<?php endif; ?>