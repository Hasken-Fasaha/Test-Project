@extends('layouts.layout')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Grades</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addGradeModal"><i
                                class="bi-plus-circle me-2"></i>Add New Grade</button>
                    </div>
                    <div class="card-body" id="show_all_grades">
                        <h1 class="text-center text-secondary my-5">Grades Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.grades.add')

    @include('pages.grades.edit')
@endsection

@section('scripts')
    <script>
        $(function() {
            // add new grade ajax request
            $("#add_grade_form").submit(function(e) {
                $("#add_grade_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_grade_btn").text('Adding...');
                $.ajax({
                    url: '{{ route('grade.store') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400) {
                            $('#save_msgList').html("");
                            $('#save_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_value) {
                                $('#save_msgList').append('<li>' + err_value + '</li>');
                            });
                            $("#add_grade_btn").text('Add Grade');
                            $("#add_grade_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#save_msgList').html("");
                                $('#save_msgList').removeClass('alert alert-danger');
                                //$('#success_message').addClass('alert alert-success');
                                //$('#success_message').text(response.message);
                                $('#addGradeModal').find('input').val('');
                                Swal.fire(
                                    'Added!',
                                    'Grade Added Successfully!',
                                    'success'
                                )
                                $("#add_grade_btn").prop("disabled", false);
                                fetchAllGrades();
                            }
                            $("#add_grade_btn").text('Add Grade');
                            $("#add_grade_form")[0].reset();
                            $("#addGradeModal").modal('hide');
                        }
                    }
                });
            });

            // edit grade ajax request
            $(document).on('click', '.editIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '{{ route('grade.edit') }}',
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        $("#min").val(response.min);
                        $("#max").val(response.max);
                        $("#grade").val(response.grade);
                        $("#grade_id").val(response.grade_id);
                    }
                });
            });

            // update grade ajax request
            $("#edit_grade_form").submit(function(e) {
                $("#edit_grade_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#edit_grade_btn").text('Updating...');
                $.ajax({
                    url: '{{ route('grade.update') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 400) {
                            $('#update_msgList').html("");
                            $('#update_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_value) {
                                $('#update_msgList').append('<li>' + err_value +
                                    '</li>');
                            });
                            $("#edit_grade_btn").text('Update Grade');
                            $("#edit_grade_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#update_msgList').html("");
                                $('#update_msgList').removeClass('alert alert-danger');
                                //$('#success_message').addClass('alert alert-success');
                                //$('#success_message').text(response.message);
                                $('#editGradeModal').find('input').val('');
                                Swal.fire(
                                    'Updated!',
                                    'Grade Updated Successfully!',
                                    'success'
                                )
                                $("#edit_grade_btn").prop("disabled", false);
                                fetchAllGrades();
                            }
                            $("#edit_grade_btn").text('Update Grade');
                            $("#edit_grade_form")[0].reset();
                            //$("#edit_grade_form").trigger("reset");
                            $("#editGradeModal").modal('hide');
                        }
                    }
                });
            });

            // delete grade ajax request
            $(document).on('click', '.deleteIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('grade.delete') }}',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                //console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Grade has been deleted.',
                                    'success'
                                )
                                fetchAllGrades();
                            }
                        });
                    }
                })
            });

            // fetch all grades ajax request
            fetchAllGrades();

            function fetchAllGrades() {
                $.ajax({
                    url: '{{ route('grades.fetchAll') }}',
                    method: 'get',
                    success: function(response) {
                        $("#show_all_grades").html(response);
                        $("table").DataTable({
                            //order: [0, 'asc']
                        });
                    },
                    error: function(response) {
                        Swal.fire(
                            'Load Data!',
                            'Something went wrong.',
                            'error'
                        )
                    }
                });
            }
        });
    </script>
@endsection
