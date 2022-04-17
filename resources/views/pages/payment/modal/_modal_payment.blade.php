<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
            <div class="modal-header  border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Add Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('paymentcreate') }}"class="forms-sample">
                    @csrf 
                    <h2>payment Information <i class="fa fa-info"></i></h2>
                    <div class="form-group">
                     <label for="exampleInputUsername1">Jamb Number</label>
                     <input type="text" class="form-control" name="jamb_no" id="jamb_no" placeholder="Enter Jamb Number" >
 
                 </div>

                
               
                <div class="form-group">
                    <label for="exampleInputUsername1">Status</label>

                    <input list="level" class="form-control" name="status" id="status"  placeholder="Select the Status" /></label>
                    <datalist id="level">
                        <option value="100">100 level</option>
                        <option value="200">200 level</option>
                        <option value="300">300 level</option>
                        <option value="400">400 level</option>
                    </datalist>
                </div>


                 <div class="form-group">
                     <label for="exampleInputUsername1">Amount</label>
                     <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required>
 
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

  <div class="modal fade" id="paymentdeleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content container">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal header-->
            <div class="modal-body">
                <p class="pb-3">Are you sure you want to remove this payment?</p>
                <div class="modal-footer">
                    <button id="paymentdeletelinkmodal"  type="button" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="paymenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
                <form method="POST" action="{{ route('paymentupdate') }}"class="forms-sample">
                    @csrf 
                    <h2>payment Information <i class="fa fa-info"></i></h2>
                    <div class="form-group">
                     <label for="exampleInputUsername1">Jamb Number</label>
                     <input type="text" class="form-control" name="jamb_no" id="editjamb_no" placeholder="Enter Jamb Number" readonly required>
 
                 </div>
                 <div class="form-group">
                     <label for="exampleInputUsername1">Amount</label>
                     <input type="number" class="form-control" name="amount" id="editamount" placeholder="Enter Amount" required>
 
                 </div>
                
                 <div class="form-group">
                     <label for="exampleInputUsername1">Semester</label>
                     <input list="semesters" class="form-control" name="status" id="editstatus"  placeholder="Which Semester?" />
                     <datalist id="semesters">
                         <option value="Part">Part Payment</option>
                         <option value="Full">Full Payment</option>
                        
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