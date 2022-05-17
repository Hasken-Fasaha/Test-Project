@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Tuition Details</h3>
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

    @include('pages.tuition-details.add')

    @include('pages.tuition-details.edit')
@endsection

@section('scripts')
    {{-- <script>
        $(document).ready(function() {
            //add_record_btn
            $("#program").change(function() {
                id = $(this).children(':selected').val();
                //$('.tuition_id').next('input').focus().val(id);
                $('.tuition_id').val(id);
            });
        });
    </script> --}}
    <script>
        $("#add_record_btn").hover(function() {
            id = $('#program').children(':selected').val();
            $('.tuition_id').val(id);
        });
    </script>
    <script type="text/javascript">
        var i = 0;
        $("#dynamicArray").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="hidden" name="dynamicField[' + i +
                '][tuition_id]"  id = "tuition_id" placeholder="Program" class="form-control tuition_id" /><input type="text" name="dynamicField[' +
                i +
                '][item]" placeholder="Description" class="form-control" /></td><td><input type="number" name="dynamicField[' +
                i +
                '][amount]" placeholder="Amount" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>

    <script>
        $(function() {
            $("#add_record_form").submit(function(e) {
                $("#add_record_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_record_btn").text('Adding...');

                $.ajax({
                    url: '{{ route('tuition-detail.store') }}',
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

            // edit ajax request
            $(document).on('click', '.editIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '{{ route('tuition.edit') }}',
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        //for (item in response) {
                        /* $("#program").append('<option value=' + response[item].program +
                            '>' + response[item].program + '</option>'); */
                        //}
                        /* $("#editProgram").append('<option value=' + response.program +
                            '>' + response.program + '</option>'); */
                        //console.log(response);
                        $("#editProgram").val(response.program);
                        $("#editSession").val(response.session);
                        $("#editRegistrationCategory").val(response.registration_category);
                        $("#editIndigeneCategory").val(response.indigene_category);
                        $("#editId").val(response.id);
                    }
                });
            });

            // update ajax request
            $("#edit_record_form").submit(function(e) {
                $("#edit_record_btn").prop("disabled", true);
                e.preventDefault();
                const fd = new FormData(this);
                $("#edit_record_btn").text('Updating...');
                $.ajax({
                    url: '{{ route('tuition.update') }}',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
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
                            $("#edit_record_btn").text('Update Record');
                            $("#edit_record_btn").prop("disabled", false);
                        } else {
                            if (response.status == 200) {
                                $('#update_msgList').html("");
                                $('#update_msgList').removeClass('alert alert-danger');
                                $('#editRecordModal').find('input').val('');
                                Swal.fire(
                                    'Updated!',
                                    'Record Updated Successfully!',
                                    'success'
                                )
                                $("#edit_record_btn").prop("disabled", false);
                                fetchAllRecords();
                            }
                            $("#edit_record_btn").text('Update Record');
                            $("#edit_record_form")[0].reset();
                            $("#editRecordModal").modal('hide');
                        }
                    }
                });
            });

            // delete ajax request
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
                            url: '{{ route('tuition.delete') }}',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Record has been deleted.',
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
                    url: '{{ route('tuitions-detail.fetchAll') }}',
                    method: 'get',
                    success: function(response) {
                        $("#show_all_records").html(response);
                        $("#programList").html(response.tuition_details);
                        $("table").DataTable({
                            //order: [0, 'asc']
                        });
                    }
                });
            }
        });
    </script>
@endsection
