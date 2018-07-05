<div class="modal fade" id="team_creation_modal" tabindex="-1" role="dialog" aria-labelledby="team_creation_modal_label" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="team_creation_modal_label">Création d'une équipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="team_name_input">Nom de l'équipe</label>
            <input type="text" class="form-control" id="team_name_input" >
          </div>

          <?php if(isset($players)): ?>

            <div class="form-group">
              <label for="team_players_select">Joueurs</label>
              <select multiple="multiple" id="team_players_select" name="team_players_select">
                <?php foreach ($players as $player): ?>
                  <option value="<?= $player->id ?>" ><?= $player->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>

          <?php endif; ?>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="insertTeam('<?= site_url('TeamsController/insert_team') ?>');" >Valider</button>
      </div>

    </div>
  </div>
</div>