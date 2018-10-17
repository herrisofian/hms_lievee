<!-- Modal -->
<div class="modal fade" id="modalEditTower" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Tower</h4>
      </div>
      <div class="modal-body">
        <form id="formEditTower">
            <input type="hidden" id="edit-id-tower" name="edit-id-tower"/>
            <div class="form-group">
                <label for="edit-code-tower">Code tower</label>
                <input type="text" class="form-control" id="edit-code-tower" name="edit-code-tower" placeholder="Code tower" required/>
            </div>
            <div class="form-group">
                <label for="edit-name-tower">Name tower</label>
                <input type="text" class="form-control" id="edit-name-tower" name="edit-name-tower" placeholder="Name tower" required/>
            </div>
            <div class="form-group">
                <label for="edit-descr-tower">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="edit-descr-tower" name="edit-descr-tower" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="edit-status-tower">Status</label>
                <select type="text" class="form-control" id="edit-select-status" name="edit-select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update-tower">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>