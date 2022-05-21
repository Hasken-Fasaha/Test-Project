

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
            <div class="modal-header  border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                <form method="POST" action="{{ route('coursecreate') }}"class="forms-sample">
                    @csrf 
                   <h2>Course Information <i class="fa fa-info"></i></h2>
                   <div class="form-group">
                    <label for="exampleInputUsername1">Course Code</label>
                    <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Credit Unit</label>
                    <input type="number" class="form-control" name="credit_unit" id="credit_unit" placeholder="Enter Credit Unit" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title" placeholder="Enter Course Title" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Semester</label>
                    <input list="semesters" class="form-control" name="semester" id="semester"  placeholder="Which Semester?" />
                    <datalist id="semesters">
                        <option value="First">First Semester</option>
                        <option value="Second">Second Semester</option>
                       
                    </datalist>
                   
                    
                </div>
                

                {{-- List of Program Ids fetched from database --}}
                <div class="form-group">
                    <label for="exampleInputUsername1">Programe ID</label>

                    <input list="programs" class="form-control" name="program_id" id="program_id" placeholder="Select Program" /></label>
                    <datalist id="programs">
                    @foreach($programs as $program )
                
                    <option value="{{$program->program_id}}">{{$program->program_name}}</option>
                    @endforeach
                    <!-- <option value="Software Engineering">
                    <option value="Machine Learning">
                    <option value="Data Science">
                    <option value="Computer Engineering"> -->
                    </datalist>
                </div>
                   
               
                <div class="form-group">
                    <label for="exampleInputUsername1">Level</label>

                    <input list="level" class="form-control" name="level" id="level"  placeholder="Which Level?" /></label>
                    <datalist id="level">
                        <option value="100">100 level</option>
                        <option value="200">200 level</option>
                        <option value="300">300 level</option>
                        <option value="400">400 level</option>
                    </datalist>
                </div>
                  
                   <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
               
               </form>
            </div>
           
      </div>
    </div>
  </div>

  <div class="modal fade" id="coursedeleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content container">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal header-->
            <div class="modal-body">
                <p class="pb-3">Are you sure you want to remove this course?</p>
                <div class="modal-footer">
                    <button id="coursedeletelinkmodal"  type="button" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="courseeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
                <form method="POST" action="{{ route('courseupdate') }}"class="forms-sample">
                    @csrf 
                    <h2>Course Information <i class="fa fa-info"></i></h2>
                    <div class="form-group">
                     <label for="exampleInputUsername1">Course Code</label>
                     <input type="text" class="form-control" name="course_code" id="editcourse_code" placeholder="Enter Course Code" readonly required>
 
                 </div>
                 <div class="form-group">
                     <label for="exampleInputUsername1">Credit Unit</label>
                     <input type="number" class="form-control" name="credit_unit" id="editcredit_unit" placeholder="Enter Credit Unit" required>
 
                 </div>
                 <div class="form-group">
                     <label for="exampleInputUsername1">Course Title</label>
                     <input type="text" class="form-control" name="course_title" id="editcourse_title" placeholder="Enter Course Title" required>
 
                 </div>
                 <div class="form-group">
                     <label for="exampleInputUsername1">Semester</label>
                     <input list="semesters" class="form-control" name="semester" id="editsemester"  placeholder="Which Semester?" />
                     <datalist id="semesters">
                         <option value="First">First Semester</option>
                         <option value="Second">Second Semester</option>
                        
                     </datalist>
                    
                      
                 </div>
                 
 
                 {{-- List of Program Ids fetched from database --}}
                 <div class="form-group">
                     <label for="exampleInputUsername1">Programe ID</label>
 
                     <input list="programs" class="form-control" name="program_id" id="editprogram_id" placeholder="Select Program"  /></label>
                     <datalist id="programs">
                     @foreach($programs as $program )
                 
                     <option value="{{$program->program_id}}">{{$program->program_name}}</option>
                     @endforeach
                     <!-- <option value="Software Engineering">
                     <option value="Machine Learning">
                     <option value="Data Science">
                     <option value="Computer Engineering"> -->
                     </datalist>
                 </div>
                    
                
                 <div class="form-group">
                     <label for="exampleInputUsername1">Level</label>
 
                     <input list="level" class="form-control" name="level" id="editlevel"  placeholder="Which Level?" /></label>
                     <datalist id="level">
                         <option value="100">100 level</option>
                         <option value="200">200 level</option>
                         <option value="300">300 level</option>
                         <option value="400">400 level</option>
                     </datalist>
                 </div>
                   
                   <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
               
               </form>
            </div>
           
      </div>
    </div>
  </div>