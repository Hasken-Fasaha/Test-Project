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
