@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="pb-3">
                    <h4 class="card-title">session List</h4>
                    <button id="addsession" class="btn btn-primary">Add</button>
                </div>
                {{-- <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p> --}}

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    @php
                        $no=1;
                    @endphp
                    <tbody>
                        @foreach ($sessions as $item )
                            
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->session_name}}</td>
                                    <td>
                                        <button type="button" data-id="{{$item->session_id}}" id="" class="sessionedit btn btn-primary waves-effect waves-light">
                                            <i class="bx bx-pencil font-size-16 align-middle me-2"></i> 
                                        </button>

                                        <button type="button" data-id="{{$item->session_id}}" id="" class="sessiondelete btn btn-danger waves-effect waves-light">
                                            <i class="bx bx bx-trash font-size-16 align-middle me-2"></i> 
                                        </button>
                                    </td>
                                    
                                </tr>
                        @endforeach
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@include('pages.session.modal._modal_session')
@endsection