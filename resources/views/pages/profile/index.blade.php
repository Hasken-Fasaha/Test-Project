

@extends('layouts.layout')
@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="margin-left: 20px; margin-top:-90px;">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">

                                

<form method="POST" action="{{ route('biodatacreate') }}" class="form w-100" id="forms"  enctype="multipart/form-data" >
    {{ csrf_field() }}

    <div class="progressbar">
        <div class="progress" id="progress"></div>
        <div class="progress-step progress-step-active" data-title="Basic Information"></div>
        <div class="progress-step" data-title="Next of Kin Details"></div>
        <div class="progress-step" data-title="SSCE Result"></div>

        <div class="progress-step" data-title="Sign & Passport"></div>
    </div>
    <div class="step-forms step-forms-active">

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Surname</label>
                                                                <input type="text" name="surname" class="form-control" id="basicpill-surname-input" placeholder="Enter Your Sur Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Middle name</label>
                                                                <input type="text" name="middlename" class="form-control" id="basicpill-middlename-input" placeholder="Enter Your Middle Name">
                                                            </div>
                                                        </div>
                                                         <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">First name</label>
                                                                <input type="text" name="firstname" class="form-control" id="basicpill-lastname-input" placeholder="Enter Your First Name">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Phone Number</label>
                                                                <input type="text" name="phone_no" class="form-control" id="basicpill-lastname-input" placeholder="Enter Your Phone Number">
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Email</label>
                                                                <input type="email" name="email" class="form-control" id="basicpill-lastname-input" placeholder="Enter Your Email Address">
                                                            </div>
                                                        </div>                                                        
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-gender-input">Gender</label>
                                                            <select class="form-control" name="gender">
                                                                    <option>-Select Your Gender-</option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-dob-input">Date of Birth</label>
                                                                <input type="date" class="form-control" name="dob" id="basicpill-date-input" placeholder="Enter Your Date of Birth">
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-mstatus-input">Marital Status</label>
                                                            <select class="form-control" name="mstatus">
                                                                    <option>-Select Your Marital Status-</option>
                                                                    <option>Single</option>
                                                                    <option>Married</option>
                                                                    <option>Widow</option>
                                                                    <option>Widower</option>
                                                                    <option>Divorced</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-nationality-input">Nationality</label>
                                                                <select class="form-control" name="nationality">
                                                                    <option>-Select Your Nationality-</option>
                                                                    <option>Nigerian</option>
                                                                    <option>Non-nigerian</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-state-input">State of Origin</label>
                                                            <select id='state' name='state_id' onchange="populateclass(this.id,'lga')"  class="form-control">
  <option value=''>-Select Your State of Origin-</option>
  <option>Abia State</option>
  <option>Adamawa State</option>
  <option>Anambra State</option>
  <option>Akwa Ibom State</option>
  <option>Bauchi State</option>
  <option>Bayelsa State</option>
  <option>Benue State</option>
  <option>Borno State</option>
  <option>Cross River State</option>
  <option>Delta State</option>
  <option>Ebonyi State</option>
  <option>Edo State</option>
  <option>Ekiti State</option>
  <option>Enugu State</option>
  <option>FCT (Abuja)</option>
  <option>Gombe State</option>
  <option>Imo State</option>
  <option>Jigawa State</option>
  <option>Kaduna State</option>
  <option>Kano State</option>
  <option>Katsina State</option>
  <option>Kebbi State</option>
  <option>Kogi State</option>
  <option>Kwara State</option>
  <option>Lagos State</option>
  <option>Nasarawa State</option>
  <option>Niger State</option>
  <option>Ogun State</option>
  <option>Ondo State</option>
  <option>Osun State</option>
  <option>Oyo State</option>
  <option>Plateau State</option>
  <option>Rivers State</option>
  <option>Sokoto State</option>
  <option>Taraba State</option>
  <option>Yobe State</option>
  <option>Zamfara State</option>
</select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lga-input">LGA</label>
                                                                <select id='lga' name='lga_id' class="form-control"></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-address-input">Address</label>
                                                                <textarea id="basicpill-address-input" class="form-control" name="address" rows="2" placeholder="Enter Your Address"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

        <div class="row"> 
            <div class="col-lg-6">
            
            </div> 
            <div class="col-lg-6 align-items-center">
            <a href="#" class="btn btn-next btn-primary width-50">Next</a>
            </div> 
        </div>

    </div>








    <div class="step-forms">


 <div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            <label for="basicpill-nok-input">Next of Kin</label>
               <input type="text" name="nok_name" class="form-control" id="basicpill-nok-input" placeholder="Enter the Name of Your Next of Kin">
         </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
            <label for="basicpill-nokpnumber-input">Next of Kin Phone Number</label>
            <input type="number" name="nok_phone_no" class="form-control" id="basicpill-nokpnumber-input" placeholder="Enter Your Next of Kin Phone Number">
        </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="basicpill-nokemail-input">Next of Kin Email</label>
                <input type="email" name="nok_email" class="form-control" id="basicpill-nokemail-input" placeholder="Enter Your Next of Kin Email">
            </div>
        </div>                                                       
     </div>


 <div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            <label for="basicpill-firstname-input">Sponsor</label>
               <input type="text" name="sponsor_name" class="form-control" id="basicpill-sponsor-input" placeholder="Enter Your Sponsor's Name">
         </div>
        </div>
<div class="col-lg-12">
    <div class="mb-3">
        <label for="basicpill-Sponsoraddress-input">Sponsor Address</label>
        <textarea id="basicpill-Sponsoraddress-input" class="form-control" name="sponsor_address" rows="2" placeholder="Enter Your Sponsor Address"></textarea>
    </div>
</div>
        <div class="col-lg-4">
            <div class="mb-3">
            <label for="basicpill-sponsorpnumber-input">Sponsor Phone Number</label>
            <input type="number" name="sponsor_phone_no" class="form-control" id="basicpill-sponsorpnumber-input" placeholder="Enter Your Sponsor Phone Number">
        </div>
        </div>
        <div class="col-lg-4">
            <div class="mb-3">
                <label for="basicpill-sponsoremail-input">Sponsor Email</label>
                <input type="email" name="sponsor_email" class="form-control" id="basicpill-sponsoremail-input" placeholder="Enter Your Sponsor Email">
            </div>
        </div>                                                       
         <div class="col-lg-4">
            <div class="mb-3">
                <label for="basicpill-relationship-input">Relationship</label>
                <input type="text" name="relationship" class="form-control" id="basicpill-relationship-input" placeholder="Enter Your Relationship">
            </div>
        </div>  
     </div>


<div class="btns-group"> <a href="#" class="btn btn-prev btn-primary w-50">Previous</a> <a href="#" class="btn btn-next btn-primary w-50">Next</a> </div>
    </div>
    <div class="step-forms">


        <div class="row">
           <div class="col-lg-12">
               <div class="mb-3">
                   <label for="basicpill-nok-input">Next of Kin</label>
                      <input type="text" name="nok_name" class="form-control" id="basicpill-nok-input" placeholder="Enter the Name of Your Next of Kin">
                </div>
               </div>
               <div class="col-lg-6">
                   <div class="mb-3">
                   <label for="basicpill-nokpnumber-input">Next of Kin Phone Number</label>
                   <input type="number" name="nok_phone_no" class="form-control" id="basicpill-nokpnumber-input" placeholder="Enter Your Next of Kin Phone Number">
               </div>
               </div>
               <div class="col-lg-6">
                   <div class="mb-3">
                       <label for="basicpill-nokemail-input">Next of Kin Email</label>
                       <input type="email" name="nok_email" class="form-control" id="basicpill-nokemail-input" placeholder="Enter Your Next of Kin Email">
                   </div>
               </div>                                                       
            </div>
       
       
        <div class="row">
           <div class="col-lg-12">
               <div class="mb-3">
                   <label for="basicpill-firstname-input">Sponsor</label>
                      <input type="text" name="sponsor_name" class="form-control" id="basicpill-sponsor-input" placeholder="Enter Your Sponsor's Name">
                </div>
               </div>
       <div class="col-lg-12">
           <div class="mb-3">
               <label for="basicpill-Sponsoraddress-input">Sponsor Address</label>
               <textarea id="basicpill-Sponsoraddress-input" class="form-control" name="sponsor_address" rows="2" placeholder="Enter Your Sponsor Address"></textarea>
           </div>
       </div>
               <div class="col-lg-4">
                   <div class="mb-3">
                   <label for="basicpill-sponsorpnumber-input">Sponsor Phone Number</label>
                   <input type="number" name="sponsor_phone_no" class="form-control" id="basicpill-sponsorpnumber-input" placeholder="Enter Your Sponsor Phone Number">
               </div>
               </div>
               <div class="col-lg-4">
                   <div class="mb-3">
                       <label for="basicpill-sponsoremail-input">Sponsor Email</label>
                       <input type="email" name="sponsor_email" class="form-control" id="basicpill-sponsoremail-input" placeholder="Enter Your Sponsor Email">
                   </div>
               </div>                                                       
                <div class="col-lg-4">
                   <div class="mb-3">
                       <label for="basicpill-relationship-input">Relationship</label>
                       <input type="text" name="relationship" class="form-control" id="basicpill-relationship-input" placeholder="Enter Your Relationship">
                   </div>
               </div>  
            </div>
       
       
       <div class="btns-group"> <a href="#" class="btn btn-prev btn-primary w-50">Previous</a> <a href="#" class="btn btn-next btn-primary w-50">Next</a> </div>
           </div>
    <div class="step-forms">




                <div class="page-content">
                    <div class="container-fluid">


                    <div class="container">
    <h1>jQuery Image Upload 
        <small>with preview</small>
    </h1>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
            </div>
        </div>
    </div>
</div>
    

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->







        <div class="btns-group"> <a href="#" class="btn btn-prev btn-primary w-50">Previous</a> 
            <input type="submit" value="Submit" id="submit-form" class="btn" /> </div>
    </div>
</form>

<script type="text/javascript">
    const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".step-forms");
const progressSteps = document.querySelectorAll(".progress-step");


let formStepsNum = 0;

nextBtns.forEach((btn) => {
btn.addEventListener("click", () => {
formStepsNum++;
updateFormSteps();
updateProgressbar();

});
});

prevBtns.forEach((btn) => {
btn.addEventListener("click", () => {
formStepsNum--;
updateFormSteps();
updateProgressbar();

});
});

function updateFormSteps() {
formSteps.forEach((formStep) => {
formStep.classList.contains("step-forms-active") &&
formStep.classList.remove("step-forms-active");
});

formSteps[formStepsNum].classList.add("step-forms-active");
}

function updateProgressbar() {
progressSteps.forEach((progressStep, idx) => {
if (idx < formStepsNum + 1) { progressStep.classList.add("progress-step-active"); } else { progressStep.classList.remove("progress-step-active"); } }); progressSteps.forEach((progressStep, idx)=> {
    if (idx < formStepsNum) { progressStep.classList.add("progress-step-check"); } else { progressStep.classList.remove("progress-step-check"); } }); const progressActive=document.querySelectorAll(".progress-step-active"); progress.style.width=((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%" ; } 
    
    // document.getElementById("submit-form").addEventListener("click", function () { progressSteps.forEach((progressStep, idx)=> {
    //     if (idx <= formStepsNum) { progressStep.classList.add("progress-step-check"); } else { progressStep.classList.remove("progress-step-check"); } }); var forms=document.getElementById("forms"); forms.classList.remove("form"); forms.innerHTML='<div class="welcome"><div class="content"><svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg><h2>Thanks for signup!</h2><span>We will contact you soon!</span><div></div>' ; });
</script>





                            </div>
                           
                        </div>
                        <!-- end row -->

                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
@endsection
