<!-- Modal -->
<div class="modal fade" id="modalAddNewBed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Bed Type</h4>
      </div>
      <div class="modal-body">
        <form id="formAddNewBed">
            <div class="form-group">
                <label for="code-bed">Code Bed Type</label>
                <input type="text" class="form-control" id="code-bed" name="code-bed" placeholder="Code Bed Type" required/>
            </div>
            <div class="form-group">
                <label for="name-bed">Name Bed Type</label>
                <input type="text" class="form-control" id="name-bed" name="name-bed" placeholder="Name Bed Type" required/>
            </div>
            <div class="form-group">
                <label for="descr-bed">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="descr-bed" name="descr-bed" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="status-bed">Status</label>
                <select type="text" class="form-control" id="select-status" name="select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-add-new-bed">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>