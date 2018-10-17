<!-- Modal -->
<div class="modal fade" id="modalAddNewStatRoom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Status Room</h4>
      </div>
      <div class="modal-body">
        <form id="formAddNewStat">
            <div class="form-group">
                <label for="code-stat">Code Status Room</label>
                <input type="text" class="form-control" id="code-stat" name="code-stat" placeholder="Code status room" required/>
            </div>
            <div class="form-group">
                <label for="name-stat">Name Status Room</label>
                <input type="text" class="form-control" id="name-stat" name="name-stat" placeholder="Name status room" required/>
            </div>
            <div class="form-group">
                <label for="descr-stat">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="descr-stat" name="descr-stat" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="status-stat">Status</label>
                <select type="text" class="form-control" id="select-status" name="select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-add-new-stat">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>