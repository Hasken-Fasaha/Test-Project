{{-- add modal start --}}

<div class="modal fade" id="addRecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                            @foreach ($tuition_details as $detail)
                                <option value="{{ $detail->id }}">
                                    {{ $detail->program }} => [{{ $detail->session }}]
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <table class="table table-bordered table-striped" id="dynamicAddRemove">
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="dynamicField[0][tuition_id]" id="tuition_id"
                                    placeholder="Program" class="form-control tuition_id" /><input type="text"
                                    name="dynamicField[0][item]" placeholder="Description" class="form-control" />
                            </td>
                            <td><input type="number" name="dynamicField[0][amount]" placeholder="Amount"
                                    class="form-control" />
                            </td>
                            <td><button type="button" name="add" id="dynamicArray" class="btn btn-outline-primary">Add
                                    More</button></td>
                        </tr>
                    </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="add_record_btn" class="btn btn-primary">Submit?</button>
            </div>
            </form>
        </div>

    </div>
</div>
