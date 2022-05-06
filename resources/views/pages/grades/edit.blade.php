{{-- edit grades modal start --}}
<div class="modal fade" id="editGradeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_grade_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="grade_id" id="grade_id">
                <div class="modal-body p-4 bg-light">
                    <ul style="padding: 5px;" id="update_msgList"></ul>
                    <div class="my-2">
                        <label for="min">Minimum Score</label>
                        <input type="number" name="min" id="min" class="form-control" placeholder="Minimum Score"
                            required>
                    </div>
                    <div class="my-2">
                        <label for="min">Maximum Score</label>
                        <input type="number" name="max" id="max" class="form-control" placeholder="Maximum Score"
                            required>
                    </div>
                    <div class="my-2">
                        <label for="grade">Grade</label>
                        <input type="text" name="grade" id="grade" class="form-control" placeholder="Grade" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_grade_btn" class="btn btn-success">Update Grade</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit grade modal end --}}
