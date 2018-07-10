<div class="modal fade" id="player_creation_modal" tabindex="-1" role="dialog" aria-labelledby="player_creation_modal_label" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="player_creation_modal_label">Création d'un joueur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="player_name_input">Nom du joueur</label>
            <input type="text" class="form-control" id="player_name_input" >
          </div>
        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="insertPlayer('<?= site_url('Players/insert_player') ?>');" >Valider</button>
      </div>

    </div>
  </div>
</div>