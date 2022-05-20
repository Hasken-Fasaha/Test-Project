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
                        <div class="alert alert-info">Registration started on:
                            <strong>{{ $tuition['regStartDate'] ?? '' }}</strong>, and will ends by
                            <strong>{{ $tuition['regEndDate'] ?? '' }}</strong>. Remaining
                            <strong>{{ $tuition['regDaysLeft'] ?? 0 }}</strong> days to close the registration.</div>

                        <table width='1000' border='0' align='center' class='printable'>
                            <tr>
                                <td colspan='3' align='center' valign='top'>

                                    <table width='100%' height='104' border='0' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td width='80'>
                                                <img src="{{ asset('assets/images/gsu-logo.png') }}" width='150'
                                                    height='150' />
                                            </td>
                                            <td width='800'>
                                                <div align='center' class='style11'><br>
                                                    <font style='font-size: 45px; font-weight:bold;'>GOMBE STATE UNIVERSITY
                                                    </font><br>
                                                    <font style='font-size:16px'>PMB: 127, Gombe State</font><br><br>
                                                    <font
                                                        style='font-weight:bold; line-height:40px; font-size:30px; color: #060'>
                                                        Admission Acceptance Letter</font><br>
                                                    <font><b>{{-- <?php echo $session; ?> --}} Academic Session</b></font>

                                                </div>
                                            </td>
                                            <td width='140'>
                                                <img src='{{-- <?php echo $pic; ?> --}}' width='130' height='150' />
                                            </td>
                                        </tr>
                                    </table>
                                    <hr style="border: solid 2px">
                                </td>
                            </tr>


                            <tr>
                                <td colspan='3'>
                                    <fieldset>
                                        <legend>Student's Biodata</legend>
                                        <table>
                                            <tr>
                                                <td align='left' valign='top' width="550">
                                                    <font class='label'>Full-Name:</font>
                                                    <font class="value">{{-- <?php echo $fullname; ?> --}}</font><br>
                                                    <font class='label'>Gender:</font>
                                                    <font class="value">{{-- <?php echo $gender; ?> --}}</font><br>
                                                    <font class='label'>Date of Birth:</font>
                                                    <font class="value">{{-- <?php echo $dob; ?> --}}</font><br>
                                                    <font class='label'>Email Address:</font>
                                                    <font class="value">{{-- <?php echo $email; ?> --}}</font><br>
                                                    <font class='label'>Phone Number:</font>
                                                    <font class="value">{{-- <?php echo $pnumber; ?> --}}</font><br>
                                                </td>

                                                <td align='left' valign='top' width="500">
                                                    <font class='label'>Marital Status:</font>
                                                    <font class="value">{{-- <?php echo $mstatus; ?> --}}</font><br>
                                                    <font class='label'>Nationality:</font>
                                                    <font class="value">{{-- <?php echo $nationality; ?> --}}</font><br>
                                                    <font class='label'>State of Origin:</font>
                                                    <font class="value">{{-- <?php echo $state; ?> --}}</font><br>
                                                    <font class='label'>LGA of Origin:</font>
                                                    <font class="value">{{-- <?php echo $lga; ?> --}}</font><br>
                                                    <font class='label'>Address:</font>
                                                    <font class="value">{{-- <?php echo $address; ?> --}}</font><br>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                            </tr>


                            {{-- <tr>
                            <td>
                          <fieldset>
                            <legend>Next of kin Details</legend>
                              <font class='label'>Name:</font> <font class="value"><?php echo $nok_name; ?></font><br>
                              <font class='label'>Address:</font> <font class="value"><?php echo $nok_address; ?></font><br>
                              <font class='label'>Phone No:</font> <font class="value"><?php echo $nok_pnumber; ?></font><br>
                              <font class='label'>Email Address:</font> <font class="value"><?php echo $nok_email; ?></font><br>
                          </fieldset>
                          
                          </td>
                          <td>
                          
                          <fieldset>
                            <legend>Sponsor's Details</legend>
                              <font class='label'>Name:</font> <font class="value"><?php echo $sponsor_name; ?></font><br>
                              <font class='label'>Address:</font> <font class="value"><?php echo $sponsor_address; ?></font><br>
                              <font class='label'>Phone No:</font> <font class="value"><?php echo $sponsor_pnumber; ?></font><br>
                              <font class='label'>Email Address:</font> <font class="value"><?php echo $sponsor_email; ?></font><br>
                              <font class='label'>Relationship:</font> <font class="value"><?php echo $sponsor_relationship; ?></font><br>
                          </fieldset>
                          </td>
                          </tr>
                          
                          
                          <tr>
                           <td  colspan='3'>
                          <fieldset>
                            <legend>O'Level Result</legend>
                          <table  border='1' cellspacing='0' cellpadding='3' bordercolor='#aaa' width="100%">
                            <tr>
                              <th>S/N</th>
                              <th>Subject</th>
                              <th>Grade</th>
                              <th>Exam Type</th>
                              <th>Year</th>
                              <th>Exam No.</th>
                            </tr>
                          <?php
                          for ($i = 0; $i < count($subjects); $i++) {
                              $sn = $i + 1;
                              echo " <tr>
                                                        <td>" .
                                  $sn .
                                  ".</td>
                                                        <td>" .
                                  $subjects[$i] .
                                  "</td>
                                                        <td>" .
                                  $grade[$i] .
                                  "</td>
                                                        <td>NECO</td>
                                                        <td>2019</td>
                                                        <td>23645764GH</td>
                                                      </tr>";
                          } ?>
                          </table>
                          </fieldset>
                           </td>
                          </tr>
                          
                          
                          
                          <tr>
                           <td  colspan='3'>
                          <fieldset>
                            <legend>Uploaded Documents</legend>
                          <table  border='1' cellspacing='0' cellpadding='3' bordercolor='#aaa' width="100%">
                            <tr>
                              <th>S/N</th>
                              <th>Document type</th>
                              <th>File size</th>
                            </tr>
                          <?php
                          for ($i = 0; $i < count($document); $i++) {
                              $sn = $i + 1;
                              echo " <tr>
                                                        <td>" .
                                  $sn .
                                  ".</td>
                                                        <td>" .
                                  $document[$i] .
                                  "</td>
                                                        <td>" .
                                  $file_size[$i] .
                                  "Kb</td>
                                                      </tr>";
                          } ?>
                          </table>
                          </fieldset>
                           </td>
                          </tr>
                          
                          
                          
                          
                          </td>
                          </tr> --}}
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('pages.tuitions.add')

    @include('pages.tuitions.edit') --}}
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
