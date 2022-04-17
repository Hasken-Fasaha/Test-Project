{{-- add new grade modal start --}}
<div class="modal fade" id="addGradeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_grade_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <ul style="padding: 5px;" id="save_msgList"></ul>

                    <div class="my-2">
                        <label for="min">Minimum Score</label>
                        <input type="number" name="min" class="form-control" placeholder="Minimum Score" required>
                    </div>
                    <div class="my-2">
                        <label for="min">Maximum Score</label>
                        <input type="number" name="max" class="form-control" placeholder="Maximum Score" required>
                    </div>
                    <div class="my-2">
                        <label for="grade">Grade</label>
                        <input type="text" name="grade" {{-- id="grade" --}} class="form-control" placeholder="Grade"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_grade_btn" class="btn btn-primary">Add Grade</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new grades modal end --}}
