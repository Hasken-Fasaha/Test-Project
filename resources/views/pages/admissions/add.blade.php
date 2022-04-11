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
