<!-- Modal -->
<div class="modal fade" id="modalAddNewTower" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Tower</h4>
      </div>
      <div class="modal-body">
        <form id="formAddNewTower">
            <div class="form-group">
                <label for="code-tower">Code Tower</label>
                <input type="text" class="form-control" id="code-tower" name="code-tower" placeholder="Code tower" required/>
            </div>
            <div class="form-group">
                <label for="name-tower">Name Tower</label>
                <input type="text" class="form-control" id="name-tower" name="name-tower" placeholder="Name Tower" required/>
            </div>
            <div class="form-group">
                <label for="descr-tower">Description</label>
                <textarea cols="50" rows="10" style="resize:none;" type="text" class="form-control" id="descr-tower" name="descr-tower" placeholder="Description" required/></textarea>
            </div>
            <div class="form-group">
                <label for="status-tower">Status</label>
                <select type="text" class="form-control" id="select-status" name="select-status" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-add-new-tower">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>