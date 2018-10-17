<!-- Modal -->
<div class="modal fade" id="modalAddNewDesc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Description</h4>
      </div>
      <div class="modal-body">
        <form id="formAddNewDesc">
            <div class="form-group">
                <label for="code-desc">Code Description</label>
                <input type="text" class="form-control" id="code-desc" name="code-desc" placeholder="Code desc" required/>
            </div>
            <div class="form-group">
                <label for="name-desc">Name Description</label>
                <input type="text" class="form-control" id="name-desc" name="name-desc" placeholder="Name desc" required/>
            </div>
            <div class="form-group">
                <label for="status-desc">Status</label>
                <select type="text" class="form-control" id="select-status" name="select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-add-new-desc">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>