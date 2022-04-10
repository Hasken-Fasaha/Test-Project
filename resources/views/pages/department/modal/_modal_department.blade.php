<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
            <div class="modal-header  border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('departmentcreate') }}" class="forms-sample">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleInputUsername1">Faculty Name</label>
                        <select name="faculty_id"  class="form-control" id="">
                            <option selected disabled>Select...</option>
                            @foreach ($faculties as $item)
                            <option value="{{ $item->faculty_id}}">{{ $item->faculty_name}}</option>
                                
                            @endforeach
                           
                            
                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Department Name</label>
                        <input type="text" class="form-control" name="dept_name"  placeholder="Enter Department Name">
                    </div>
                  
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
           
      </div>
    </div>
  </div>

  <div class="modal fade" id="departmentdeleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content container">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal header-->
            <div class="modal-body">
                <p class="pb-3">Are you sure you want to remove this Department?</p>
                <div class="modal-footer">
                    <button id="departmentdeletelinkmodal"  type="button" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="departmenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('departmentupdate') }}"class="forms-sample">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1">Faculty Name</label>
                        <select name="facul_ide"  class="form-control" id="">
                            <option selected disabled>Select...</option>
                            @foreach ($faculties as $item)
                            <option value="{{ $item->faculty_id}}">{{ $item->faculty_name}}</option>
                                
                            @endforeach
                           
                            
                        </select>
                       
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputUsername1">Department Name</label>
                        <input type="text" class="form-control" id="dept_namee" name="dept_namee"  placeholder="Department Name">
                    </div>

                    <input type="hidden" name="dept_ide" id="dept_ide">
                    
                  
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
           
      </div>
    </div>
  </div>