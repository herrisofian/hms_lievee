<!-- Modal -->
<div class="modal fade" id="modalEditBed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Bed Type</h4>
      </div>
      <div class="modal-body">
        <form id="formEditBed">
            <input type="hidden" id="edit-id-bed" name="edit-id-bed"/>
            <div class="form-group">
                <label for="edit-code-bed">Code Bed Type</label>
                <input type="text" class="form-control" id="edit-code-bed" name="edit-code-bed" placeholder="Code Bed Type" required/>
            </div>
            <div class="form-group">
                <label for="edit-name-bed">Name Bed Type</label>
                <input type="text" class="form-control" id="edit-name-bed" name="edit-name-bed" placeholder="Name Bed Type" required/>
            </div>
            <div class="form-group">
                <label for="edit-descr-bed">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="edit-descr-bed" name="edit-descr-bed" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="edit-status-bed">Status</label>
                <select type="text" class="form-control" id="edit-select-status" name="edit-select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update-bed">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>