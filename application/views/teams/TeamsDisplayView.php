<div class="list-group">
  <a href="#" class="list-group-item active">
    active
  </a>
  
  <?php foreach ($teams as $team): ?>
	  <a href="#" class="list-group-item"><?php echo $team->name ?></a>
  <?php endforeach; ?>
  
</div>