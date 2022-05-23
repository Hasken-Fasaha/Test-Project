{{-- add recod modal start --}}

<div class="modal fade" id="addRecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Tuition Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul style="padding: 5px;" id="save_msgList"></ul>
                <form method="POST" id="add_record_form">
                    @csrf
                    <div class="form-group">
                        <label for="program">Program</label>
                        <select name="program" id="program" class="form-control" required>
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
                        <select name="session" id="session" class="form-control" required>
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
                        <select name="registration_category" id="registration_category" class="form-control" required>
                            <option value="">--- Select ---</option>
                            <option value="Freshers">Freshers</option>
                            <option value="Returners">Returners</option>
                            <option value="Foreigners">Foreigners</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="indigene_category">Indigene/Non-Indigene/Residence/Non-Residence</label>
                        <select name="indigene_category" id="indigene_category" class="form-control" required>
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
                <button type="submit" id="add_record_btn" class="btn btn-primary">Submit?</button>
            </div>
            </form>
        </div>

    </div>
</div>

