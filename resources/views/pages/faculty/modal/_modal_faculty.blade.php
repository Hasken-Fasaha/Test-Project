<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="facultyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header  border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('facultycreate') }}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Faculty Name</label>
                        <input type="text" class="form-control" name="faculty_name" placeholder="Enter Faculty Name">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="facultydeleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content container">
            <div class="modal-header">
                <h3 class="modal-title">Delete</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal header-->
            <div class="modal-body">
                <p class="pb-3">Are you sure you want to remove this Faculty?</p>
                <div class="modal-footer">
                    <button id="facultydeletelinkmodal" type="button" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="facultyeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('facultyupdate') }}" class="forms-sample">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1">Faculty Name</label>
                        <input type="text" class="form-control" id="facul_name" name="facul_name"
                            placeholder="Faculty Name">
                    </div>
                    <input type="hidden" id="facul_id" name="facul_id">


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
