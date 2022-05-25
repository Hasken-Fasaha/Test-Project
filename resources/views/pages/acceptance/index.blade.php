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
                                                        &#8358;{{ number_format($tuition['tuitionSum'] ?? 0, 0) }}</font>
                                                    <br>
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
                                                        <td>&#8358;{{ number_format($item['amount'], 0) }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"><strong>Total</strong></td>
                                                    <td align="center"><strong>
                                                            &#8358;{{ number_format($tuition['tuitionSum'] ?? 0, 0) }}</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <strong class="text-danger">*Note: </strong> If you have rejected your admission,
                                        you are not allowed to
                                        undo the operation. <br>


                                        <div class="col-md-8 p-2">
                                            <form method="POST" action="{{-- {{ route('reject') }} --}}">

                                                <div class="form-group pb-2">
                                                    <select name="accept" id="accept" class="form-control" required>
                                                        <option value="">--- Select ---</option>
                                                        <option value="Yes">--- Accept? ---</option>
                                                        <option value="No">--- Reject? ---</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    {{-- <button type="button" onclick="back()" class="btn btn-secondary">Back</button> --}}
                                                    <button type="button" class="btn btn-success"
                                                        onclick="window.print()">Print</button>
                                                    <button type="button"
                                                        class="btn btn-danger">Reject?</button>{{-- submit --}}

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control" id="email-address"
                                                            value="{{ $tuition['admission']['email'] ?? '' }}"
                                                            required />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="hidden" id="amount"
                                                            value="{{ $tuition['tuitionSum'] ?? 0 }}" required />
                                                    </div>
                                                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-submit pt-2">
                                                        <button type="submit" id="submit" class="btn btn-info "
                                                            onclick="payWithPaystack()"> Accept
                                                            and Proceed to Payment? </button>
                                                    </div> --}}
                                            </form>

                                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8"
                                                class="form-horizontal" role="form">
                                                <div class="row" style="margin-bottom:40px;">
                                                    <div class="col-md-8 col-md-offset-2">

                                                        <input type="hidden" name="email"
                                                            value="{{ $tuition['admission']['email'] ?? '' }}">
                                                        <input type="hidden" name="orderID"
                                                            value="{{ $tuition['admission']['jamb_no'] ?? '' }}">
                                                        <input type="hidden" name="amount"
                                                            value="{{ $tuition['tuitionSum'] * 100 }}">
                                                        {{-- required in kobo --}}
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="currency" value="NGN">
                                                        <input type="hidden" name="metadata"
                                                            value="{{ json_encode($array = ['key_name' => 'value']) }}">
                                                        <input type="hidden" name="reference"
                                                            value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                        <p>
                                                            <button class="btn btn-success btn-lg btn-block mt-2"
                                                                id="submit" type="submit" value="Pay Now!">
                                                                <i class="fa fa-plus-circle fa-lg"></i> Accept
                                                                and Proceed to Payment?
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
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
        $(document).ready(function() {
            $('#accept').val('');
            $('#submit').prop("disabled", true);
            $('#accept').change(function() {
                selectVal = $('#accept').val();
                if (selectVal === '' || selectVal === 'No') {
                    $('#submit').prop("disabled", true);
                } else {
                    $('#submit').prop("disabled", false);
                }
            })

        });
    </script>
@endsection
