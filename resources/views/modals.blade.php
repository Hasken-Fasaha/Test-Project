{{-- login model begins here --}}





 <!-- Modal -->
 
 <div class="modal fade" id="home_loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
            <div class="modal-header  border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Student Login.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                <div class="limit">
                    <div class="login-container">
                        <div class="bb-login" style="padding-top: 0px; margin-top: 0px;">
                            <form method="GET" action="{{ route('application') }}"class="forms-sample">
                                @csrf
                                <center><img src="{{ asset('assets/images/logo.png') }}" width="100" style="padding-top:8px">
                                </center>
                                <span class="bb-form-title p-b-26"> Welcome </span>
                
                                <div class="wrap-input100 validate-input mt-3">
                                    <input class="input100" type="text" name="jamb_no" required required>
                                    <span class="bbb-input" data-placeholder="JAMB Number"></span>
                                </div>
                
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="date" name="dob" required required>
                                    <span class="bbb-input" data-placeholder="">
                                </div>
                
                
                
                                <div class="login-container-form-btn">
                                    <div class="bb-login-form-btn">
                                        <div class="bb-form-bgbtn"></div>
                                        <button class="bb-form-btn" type="submit" name="login"> Proceed to Payment </button>
                
                                    </div>
                                </div>
                
                            </form>
                        </div>
                    </div>
                </div>
                

            </div>
           
      </div>
    </div>
  </div>

{{-- login model ends here --}}
