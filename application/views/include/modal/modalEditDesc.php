<!-- Modal -->
<div class="modal fade" id="modalEditDesc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Description</h4>
      </div>
      <div class="modal-body">
        <form id="formEditDesc">
            <input type="hidden" id="edit-id-desc" name="edit-id-desc"/>
            <div class="form-group">
                <label for="edit-code-desc">Code Description</label>
                <input type="text" class="form-control" id="edit-code-desc" name="edit-code-desc" placeholder="Code desc" required/>
            </div>
            <div class="form-group">
                <label for="edit-name-desc">Name Description</label>
                <input type="text" class="form-control" id="edit-name-desc" name="edit-name-desc" placeholder="Name desc" required/>
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
        <button type="submit" class="btn btn-primary btn-update-desc">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>