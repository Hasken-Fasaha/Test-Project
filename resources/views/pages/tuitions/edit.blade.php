{{-- edit modal start --}}
<div class="modal fade" id="editRecordModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Tuition Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul style="padding: 5px;" id="update_msgList"></ul>
                <form method="POST" id="edit_record_form">
                    @csrf
                    <input type="hidden" name="id" id="editId">
                    <div class="form-group">
                        <label for="program">Program</label>
                        <select name="program" id="editProgram" class="form-control" required>
                            <option value="">--- Select ---</option>
                            <option value="Remedial">Remedial</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Undergraduate Degree">Undergraduate Degree</option>
                            <option value="Part-time Degree">Part-time Degree</option>
                            <option value="Postgraduate Diploma">Postgraduate Diploma</option>
                            <option value="Masters Degree">Masters Degree</option>
                            <option value="Doctorate Degree">Doctorate Degree</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="session">Session</label>
                        <select name="session" id="editSession" class="form-control" required>
                            <option value="">--- Select ---</option>
                            @php
                                $next = 2022;
                                for ($i = 2021; $i < 2050; $i++) {
                                    echo "<option value='$i/$next'>$i/$next</option>";
                                    $next += 1;
                                }
                            @endphp
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="other_name">Freshers/Returners/Foreigners</label>
                        <select name="registration_category" id="editRegistrationCategory" class="form-control"
                            required>
                            <option value="">--- Select ---</option>
                            <option value="Freshers">Freshers</option>
                            <option value="Returners">Returners</option>
                            <option value="Foreigners">Foreigners</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="indigene_category">Indigene/Non-Indigene/Residence/Non-Residence</label>
                        <select name="indigene_category" id="editIndigeneCategory" class="form-control" required>
                            <option value="">--- Select ---</option>
                            <option value="Indigene">Indigene</option>
                            <option value="Non-Indigene">Non-Indigene</option>
                            <option value="Residence">Residence</option>
                            <option value="Non-Residence">Non-Residence</option>
                            {{-- @foreach ($programmes as $programme)
                                    <option value="{{ $programme->program_id }}">{{ $programme->program_name }}
                                    </option>
                                @endforeach --}}
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="edit_record_btn" class="btn btn-primary">Submit?</button>
            </div>
            </form>
        </div>

    </div>
</div>
{{-- edit modal end --}}
