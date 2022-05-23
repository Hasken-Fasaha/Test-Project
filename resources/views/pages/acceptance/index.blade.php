@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Acceptance & Tuition Description</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addRecordModal"><i
                                class="bi bi-arrow-left me-2"></i>Back</button>
                    </div>
                    <div class="card-body" id="">
                        <div class="alert alert-info">Registration started on
                            <strong>{{ $tuition['regStartDate'] ?? '' }}</strong>, and will ends by
                            <strong>{{ $tuition['regEndDate'] ?? '' }}</strong>. Remaining
                            <strong>{{ $tuition['regDaysLeft'] ?? 0 }}</strong> days to close the registration.
                        </div>

                        <table width='1000' border='0' align='center' class='printable'>
                            <tr>
                                <td colspan='3' align='center' valign='top'>

                                    <table width='100%' height='80' border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td width='80'>
                                                <img src="{{ asset('assets/images/gsu-logo.png') }}" width='150'
                                                    height='150' />
                                            </td>
                                            <td width='800'>
                                                <div align='center' class='style11'><br>
                                                    <font style='font-size: 45px; font-weight:bold;'>GOMBE STATE UNIVERSITY
                                                    </font><br>
                                                    <font style='font-size:16px'>PMB: 127, Tudun Wada Gombe State</font><br>
                                                    <font
                                                        style='font-weight:bold; line-height:40px; font-size:30px; color: #060'>
                                                        Admission Acceptance Letter</font><br>
                                                    <font><b>{{ $tuition['admission']['session'] ?? '' }} Academic
                                                            Session</b></font>

                                                </div>
                                            </td>
                                            <td width='140'>
                                                {{-- <img src='{{-- <?php echo $pic; ?> --}' width='130' height='150' /> --}}
                                            </td>
                                        </tr>
                                    </table>
                                    <hr style="border: #000 solid 1px;">
                                </td>
                            </tr>


                            <tr>
                                <td colspan='3'>
                                    <fieldset>
                                        <legend><strong><u>Applicant's Basic Details</u></strong></legend>
                                        <table>
                                            <tr>
                                                <td align='left' valign='top' width="550">
                                                    <font class='label'><strong>Full Name:</strong></font>
                                                    @php
                                                        $fullName = strtoupper($tuition['admission']['surname'] ?? '') . ', ' . ucfirst($tuition['admission']['first_name'] ?? '') . ' ' . ucfirst($tuition['admission']['other_names'] ?? '');
                                                    @endphp
                                                    <font class="value">
                                                        {{ $fullName }}</font><br>
                                                    <font class='label'><strong>Gender:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['gender'] ?? '' }}</font><br>
                                                    <font class='label'><strong>Date of Birth:</strong></font>
                                                    <font class="value">
                                                        {{ \Carbon\Carbon::parse($tuition['admission']['dob'])->format('d/m/Y') ?? '' }}
                                                    </font><br>
                                                    <font class='label'><strong>Email Address:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['email'] ?? '' }}</font><br>
                                                    <font class='label'><strong>JAMB Reg. No.:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['jamb_no'] ?? '' }}</font><br>
                                                    <font class='label'><strong>UTME Scores:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['jamb_score'] ?? '' }}</font><br>
                                                </td>

                                                <td align='left' valign='top' width="500">
                                                    <font class='label'><strong>Program Type:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['programme'] ?? '' }}</font><br>
                                                    <font class='label'><strong>Course Offered:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['program']['program_name'] ?? '' }}
                                                    </font><br>
                                                    <font class='label'><strong>LGA of Origin:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['lga'] ?? '' }}</font><br>
                                                    <font class='label'><strong>State of Origin:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['state'] ?? '' }}</font><br>
                                                    <font class='label'><strong>Country:</strong></font>
                                                    <font class="value">
                                                        {{ $tuition['admission']['country'] ?? '' }}</font><br>
                                                    <font class='label'><strong>Tuition Fee Payable:</strong></font>
                                                    <font class="value">
                                                        {{ number_format($tuition['tuitionSum'] ?? 0, 0) }}</font><br>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <strong><u>Tuition Description</u></strong>
                                        <table class="table table-bordered" style="width: 50%;">
                                            <thead>
                                                <tr align="center">
                                                    <th>S/N</th>
                                                    <th>Item</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            {{-- {{ $tuition['tuitionDescription'] }} --}}
                                            <tbody>
                                                @foreach ($tuition['tuitionDescription'] as $key => $item)
                                                    <tr align="center">
                                                        <td width="10%">{{ $key + 1 }}</td>
                                                        <td align="left">{{ $item['item'] }}</td>
                                                        <td>{{ $item['amount'] }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"><strong>Total</strong></td>
                                                    <td align="center"><strong>
                                                            {{ number_format($tuition['tuitionSum'] ?? 0, 0) }}</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <strong class="text-danger">*Note: </strong> If you have rejected your admission,
                                        you are not allowed to
                                        undo the operation. <br>
                                        <div class="col-md-8 p-2">
                                            <form method="POST" action="{{ route('pay') }}">
                                                @csrf
                                                <div class="form-group pb-2">
                                                    <select name="accept" id="accept" class="form-control" required>
                                                        <option value="">--- Select ---</option>
                                                        <option value="Yes">--- Accept? ---</option>
                                                        <option value="No">--- Reject? ---</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <button type="button" class="btn btn-secondary">Back</button>
                                                    <button type="button" class="btn btn-success"
                                                        onclick="window.print()">Print</button>
                                                    <button type="submit" class="btn btn-danger">Reject?</button>
                                                    
                                                    </form>
                                                        <form id="paymentForm">
                                                            <div class="form-group">
                                                              
                                                              <input type="hidden" class="form-control" id="email-address"  value="{{ $tuition['admission']['email'] ?? '' }}"  required />
                                                            </div>
                                                            <div class="form-group">
                                                              <input class="form-control" type="hidden" id="amount" value="{{ $tuition['tuitionSum'] ?? 0 }}" required />
                                                            </div>
                                                            
                                                            <div class="form-submit pt-2">
                                                              <button type="submit" class="btn btn-info " onclick="payWithPaystack()"> Accept
                                                                and Proceed to Payment? </button>
                                                            </div>
                                                          </form>
                                                          <script src="https://js.paystack.co/v1/inline.js"></script> 
                                                </div>
                                           

                                            

                                        </div>

                    </div>

                    </fieldset>
                    </td>
                    </tr>

                    </table>


                </div>
            </div>
        </div>
    </div>
    </div>

    
@endsection

@section('scripts')
<script>
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_b4e57fc9060cd4f2d553bbaa2317ebfbbf2ca758', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      //alert(message);
      console.log(response.reference);
      window.location="http://127.0.0.1:8000/profile"; //student-dashboard
    }
  });
  handler.openIframe();
}
</script>
    
@endsection
