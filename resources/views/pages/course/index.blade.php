@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="pb-3">
                    <h4 class="card-title">Course List</h4>
                    <button id="addcourse" class="btn btn-primary">Add</button>
                </div>
                {{-- <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p> --}}

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Course Code</th>
                        <th>Corse Title</th>
                        <th>Credit Unit</th>
                        <th>Semester Based</th>
                        <th>Program</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    @php
                        $no=1;
                    @endphp
                    <tbody>
                        @foreach ($courses as $course )
                            
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->course_title }}</td>
                                    <td>{{ $course->credit_unit }}</td>
                                    <td>{{ $course->semester }}</td>
                                    <td>{{ $course->program_id }}</td>
                                    <td>{{ $course->level }}</td>
                                    <td>
                                        <button type="button" data-id="{{$course->course_code}}" id="" class=" courseedit btn btn-primary waves-effect waves-light">
                                            <i class="bx bx-pencil font-size-16 align-middle me-2"></i> 
                                        </button>

                                        <button type="button" data-id="{{$course->course_code}}" id="" class=" coursedelete btn btn-danger waves-effect waves-light">
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
@include('pages.course.modal._modal_course')
@endsection