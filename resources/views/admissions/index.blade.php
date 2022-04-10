@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Admissions</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addAdmissionModal"><i
                                class="bi-plus-circle me-2"></i>Add New Admission</button>
                        {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addAdmissionModal"><i
                                class="bi-plus-circle me-2"></i>Import Admissions</button> --}}
                    </div>
                    <div class="card-body" id="show_all_admissions">
                        <h1 class="text-center text-secondary my-5">Admissions Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- add new Admission modal start --}}
    <div class="modal fade" id="addAdmissionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Admission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="add_admission_form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4 bg-light">
                        <ul style="padding: 5px;" id="save_msgList"></ul>
                        <div class="row">
                            <div class="col-lg">
                                <label for="jamb_no">JAMB No.</label>
                                <input type="text" name="jamb_no" class="form-control" placeholder="JAMB No." required>
                            </div>
                            <div class="col-lg">
                                <label for="jamb_score">JAMB Score</label>
                                <input type="number" name="jamb_score" class="form-control" placeholder="JAMB Score"
                                    required>
                            </div>
                        </div>
                        <div class="my-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="my-2">
                            <label for="dob">Birth Date</label>
                            <input type="date" name="dob" id="dob" class="form-control" placeholder="Birth Date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="add_admission_btn" class="btn btn-primary">Add Admission</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- add new Admissions modal end --}}

    {{-- edit Admissions modal start --}}
    <div class="modal fade" id="editAdmissionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="edit_admission_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="admission_id" id="admission_id">
                    {{-- <input type="hidden" name="candidate_avatar" id="candidate_avatar"> --}}
                    <div class="modal-body p-4 bg-light">
                        <ul style="padding: 5px;" id="update_msgList"></ul>
                        <div class="row">
                            <div class="col-lg">
                                <label for="jamb_no">JAMB No.</label>
                                <input type="text" name="jamb_no" id="jamb_no" class="form-control" placeholder="JAMB No."
                                    required>
                            </div>
                            <div class="col-lg">
                                <label for="jamb_score">JAMB Score</label>
                                <input type="text" name="jamb_score" id="jamb_score" class="form-control"
                                    placeholder="JAMB Score" required>
                            </div>
                        </div>
                        <div class="my-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="my-2">
                            <label for="dob">Birth Date</label>
                            <input type="date" name="dob" id="birh_date" class="form-control" placeholder="Birth Date"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="edit_admission_btn" class="btn btn-success">Update Admission</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- edit Admission modal end --}}
@endsection

@section('scripts')
    <script>
        $(function() {
            // add new Admission ajax request
            $("#add_admission_form").submit(function(e) {
                $("#add_admission_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_admission_btn").text('Adding...');
                $.ajax({
                    url: '{{ route('admission.store') }}',
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
                            $("#add_admission_btn").text('Add Admission');
                            $("#add_admission_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#save_msgList').html("");
                                $('#save_msgList').removeClass('alert alert-danger');
                                //$('#success_message').addClass('alert alert-success');
                                //$('#success_message').text(response.message);
                                $('#addAdmissionModal').find('input').val('');
                                Swal.fire(
                                    'Added!',
                                    'Admission Added Successfully!',
                                    'success'
                                )
                                $("#add_admission_btn").prop("disabled", false);
                                fetchAllAdmissions();
                            }
                            $("#add_admission_btn").text('Add Admission');
                            $("#add_admission_form")[0].reset();
                            $("#addAdmissionModal").modal('hide');
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
                                fetchAllAdmissions();
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
                                fetchAllAdmissions();
                            }
                        });
                    }
                })
            });

            // fetch all Admissions ajax request
            fetchAllAdmissions();

            function fetchAllAdmissions() {
                $.ajax({
                    url: '{{ route('admissions.fetchAll') }}',
                    method: 'get',
                    success: function(response) {
                        $("#show_all_admissions").html(response);
                        $("table").DataTable({
                            //order: [0, 'asc']
                        });
                    }
                });
            }
        });
    </script>
@endsection
