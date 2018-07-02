<div class="modal fade" id="team_creation_modal" tabindex="-1" role="dialog" aria-labelledby="team_creation_modal_label" aria-hidden="true">
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
            <label for="team_name">Nom de l'équipe</label>
            <input type="text" class="form-control" id="team_name" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Joueurs</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <div id="example" class="form-control"></div>

          </div>
        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Valider</button>
      </div>

    </div>
  </div>
</div>