@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form id="paymentForm">
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email-address"  value={{$admission[0]->email}}  required />
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount</label>
                      <input class="form-control" type="tel" id="amount" value=30000 required />
                    </div>
                    <div class="form-group">
                      <label for="first-name">First Name</label>
                      <input type="text" class="form-control" id="first-name" value={{$admission[0]->first_name}} />
                    </div>
                    <div class="form-group">
                      <label for="last-name">Last Name</label>
                      <input class="form-control" type="text" id="last-name" value={{$admission[0]->first_name." ".$admission[0]->other_name}}/>
                    </div>
                    {{-- <div class="form-group">
                        <label for="program">Program</label>
                        <input class="form-control" type="text" id="last-name" value={{$admission[0]->program}}/>
                      </div> --}}
                    <div class="form-submit pt-2">
                      <button type="submit" class="btn btn-danger " onclick="payWithPaystack()"> Pay </button>
                    </div>
                  </form>
                  <script src="https://js.paystack.co/v1/inline.js"></script> 

                {{-- <div class="pb-3">
                    <h4 class="card-title">payment List</h4>
                    <button id="addpayment" class="btn btn-primary">Add</button>
                </div> --}}
                {{-- <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p> --}}

                {{-- <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Jamb Number</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        
                    </tr>
                    </thead>

                    @php
                        $no=1;
                    @endphp
                    <tbody>
                        @foreach ($paymenthistory as $payment )
                            
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $payment->jamb_no }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->date}}</td>
                                    <td>{{ $payment->status }}</td>
                                    
                                    <td>
                                        <button type="button" data-id="{{$payment->tranx_id}}" id="" class=" paymentedit btn btn-primary waves-effect waves-light">
                                            <i class="bx bx-pencil font-size-16 align-middle me-2"></i> 
                                        </button>

                                        <button type="button" data-id="{{$payment->tranx_id}}" id="" class=" paymentdelete btn btn-danger waves-effect waves-light">
                                            <i class="bx bx bx-trash font-size-16 align-middle me-2"></i> 
                                        </button>
                                    </td>
                                    
                                </tr>
                        @endforeach
                       
                      
                    
                    </tbody>
                </table> --}}

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@include('pages.payment.modal._modal_payment')
@endsection