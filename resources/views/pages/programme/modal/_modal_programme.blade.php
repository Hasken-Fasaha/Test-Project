<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="programmeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
            <div class="modal-header  border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add Programme</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('programmecreate') }}" class="forms-sample">
                    @csrf

                       
                    <div class="form-group">
                        <label for="exampleInputUsername1">Department Name</label>
                        <select name="dept_id"  class="form-control" id="">
                            <option selected disabled>Select...</option>
                            @foreach ($departments as $item)
                            <option value="{{ $item->dept_id}}">{{ $item->dept_name}}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Programme Name</label>
                        <input type="text" class="form-control" name="programme_name"  placeholder="Enter Programme Name">
                    </div>
                  
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
           
      </div>
    </div>
  </div>

  <div class="modal fade" id="programmedeleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content container">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal header-->
            <div class="modal-body">
                <p class="pb-3">Are you sure you want to remove this Programme?</p>
                <div class="modal-footer">
                    <button id="programmedeletelinkmodal"  type="button" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="programmeeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Programme</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('programmeupdate') }}"class="forms-sample">
                    @csrf
                           
                    <div class="form-group">
                        <label for="exampleInputUsername1">Department Name</label>
                        <select name="dept_ide"  class="form-control" id="">
                            <option selected disabled>Select...</option>
                            @foreach ($departments as $item)
                            <option value="{{ $item->dept_id}}">{{ $item->dept_name}}</option>
                            @endforeach
                            
                        </select>
                       
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputUsername1">Programme Name</label>
                        <input type="text" class="form-control" id="prog_namee" name="prog_namee"  placeholder="Programme Name">
                    </div>
                    
                  <input type="hidden" name="prog_ide" id="prog_ide">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
           
      </div>
    </div>
  </div>