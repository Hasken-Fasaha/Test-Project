@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Tuitions</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addRecordModal"><i
                                class="bi-plus-circle me-2"></i>Add New Record</button>
                    </div>
                    <div class="card-body" id="show_all_records">
                        <h3 class="text-center text-secondary my-5">Loading...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.tuitions.add')

    {{-- @include('pages.admissions.edit') --}}
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#add_record_form").submit(function(e) {
                $("#add_record_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_record_btn").text('Adding...');

                $.ajax({
                    url: '{{ route('tuition.store') }}',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    //async: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.status == 400) {
                            $('#save_msgList').html("");
                            $('#save_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_value) {
                                $('#save_msgList').append('<li>' + err_value + '</li>');
                            });
                            $("#add_record_btn").text('Add Record');
                            $("#add_record_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#save_msgList').html("");
                                $('#save_msgList').removeClass('alert alert-danger');
                                $('#addRecordModal').find('input').val('');
                                Swal.fire(
                                    'Added!',
                                    'Record Added Successfully!',
                                    'success'
                                )
                                $("#add_record_btn").prop("disabled", false);
                                fetchAllRecords();
                            }
                            $("#add_record_btn").text('Add Record');
                            $("#add_record_form")[0].reset();
                            $("#addRecordModal").modal('hide');
                        }
                    }
                });
            });

            // edit Admission ajax request
            $(document).on('click', '.editIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '{{ route('admission.edit') }}',
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $("#jamb_no").val(response.jamb_no);
                        $("#jamb_score").val(response.jamb_score);
                        $("#email").val(response.email);
                        $("#birh_date").val(response.dob);
                        $("#admission_id").val(response.id);
                    }
                });
            });

            // update Admission ajax request
            $("#edit_admission_form").submit(function(e) {
                $("#edit_admission_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#edit_admission_btn").text('Updating...');
                $.ajax({
                    url: '{{ route('admission.update') }}',
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
                            $("#edit_admission_btn").text('Update Admission');
                            $("#edit_admission_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#update_msgList').html("");
                                $('#update_msgList').removeClass('alert alert-danger');
                                //$('#success_message').addClass('alert alert-success');
                                //$('#success_message').text(response.message);
                                $('#editAdmissionModal').find('input').val('');
                                Swal.fire(
                                    'Updated!',
                                    'Admission Updated Successfully!',
                                    'success'
                                )
                                $("#edit_admission_btn").prop("disabled", false);
                                fetchAllRecords();
                            }
                            $("#edit_admission_btn").text('Update Admission');
                            $("#edit_admission_form")[0].reset();
                            $("#editAdmissionModal").modal('hide');
                        }
                    }
                });
            });

            // delete Admission ajax request
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
                            url: '{{ route('admission.delete') }}',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Admission has been deleted.',
                                    'success'
                                )
                                fetchAllRecords();
                            }
                        });
                    }
                })
            });

            // fetch all records ajax request
            fetchAllRecords();

            function fetchAllRecords() {
                $.ajax({
                    url: '{{ route('tuitions.fetchAll') }}',
                    method: 'get',
                    success: function(response) {
                        $("#show_all_records").html(response);
                        $("table").DataTable({
                            //order: [0, 'asc']
                        });
                    }
                });
            }
        });
    </script>
@endsection
