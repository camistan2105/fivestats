<?php if(isset($teams)): ?>

	<div class="list-group">
		<?php foreach ($teams as $team): ?>
			<button type="button" class="list-group-item list-group-item-action team-list" onclick="showTeamCard(this, <?= $team->id ?>, '<?= site_url('Teams/get_team_data') ?>')" ><?= $team->name ?></button>
		<?php endforeach; ?>
	</div>

<?php endif; ?>