<!-- Modal -->
<div class="modal fade" id="modalEditStatRoom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Status Room</h4>
      </div>
      <div class="modal-body">
        <form id="formEditStat">
            <input type="hidden" id="edit-id-stat" name="edit-id-stat"/>
            <div class="form-group">
                <label for="edit-code-stat">Code Status Room</label>
                <input type="text" class="form-control" id="edit-code-stat" name="edit-code-stat" placeholder="Code status room" required/>
            </div>
            <div class="form-group">
                <label for="edit-name-stat">Name Status Room</label>
                <input type="text" class="form-control" id="edit-name-stat" name="edit-name-stat" placeholder="Name status room" required/>
            </div>
            <div class="form-group">
                <label for="edit-descr-stat">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="edit-descr-stat" name="edit-descr-stat" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="edit-status-stat">Status</label>
                <select type="text" class="form-control" id="edit-select-status" name="edit-select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update-stat">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>