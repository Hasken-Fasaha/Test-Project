$(document).ready(function() {
    $('#addcourse').click(function(e) {
        e.preventDefault()
        $('#courseModal').modal('show');
    });

    $('.courseedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');

        
        $.ajax({
            type: 'GET',
            async: false,
            url: '/course/edit/' + mid,
            success: function(response) {
                // console.log(response.course_title+$('#editcourse_code').attr('placeholder'))
                $('#editcourse_code').val(response.course_code);
                $('#editcourse_title').val(response.course_title);
                $('#editcredit_unit').val(response.credit_unit);
                $('#editsemester').val(response.semester);
                $('#editprogram_id').val(response.program_id);
                $('#editlevel').val(response.level);
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#courseeditModal').modal('show');
    });

   

    $('.coursedelete').click(function(e) {
        e.preventDefault()
        $('#coursedeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#coursedeleteModal').modal('show');
    });

    $('#coursedeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/course/delete/' + $(this).attr('data-id'),
            success: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'success',
                    title: data.success,
                });
                window.location.reload();
            },
            error: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'error',
                    title: data.error,
                });
                window.location.reload();
            }
        });
    });

    
    $('#adddept').click(function(e) {
        e.preventDefault()
        $('#departmentModal').modal('show');
    });

    $('.departmentdelete').click(function(e) {
        e.preventDefault()
        $('#departmentdeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#departmentdeleteModal').modal('show');
    });

    $('#departmentdeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/department/delete/' + $(this).attr('data-id'),
            success: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'success',
                    title: data.success,
                });
                window.location.reload();
            },
            error: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'error',
                    title: data.error,
                });
                window.location.reload();
            }
        });
    });


    $('.departmentedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            async: false,
            url: '/department/edit/' + mid,
            success: function(response) {
                $('#dept_namee').val(response.dept_name);
                $('#dept_ide').val(response.dept_id);
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#departmenteditModal').modal('show');
    });
    
    $('#addprogramme').click(function(e) {
        e.preventDefault()
        $('#programmeModal').modal('show');
    });


    $('.programmeedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');
        $.ajax({
            type: 'GET',
            async: false,
            url: '/programme/edit/' + mid,
            success: function(response) {
                $('#prog_namee').val(response.program_name);
                $('#prog_ide').val(response.program_id);
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#programmeeditModal').modal('show');
    });

    $('.programmedelete').click(function(e) {
        e.preventDefault()
        $('#programmedeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#programmedeleteModal').modal('show');
    });
    $('#programmedeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/programme/delete/' + $(this).attr('data-id'),
            success: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'success',
                    title: data.success,
                });
                window.location.reload();
            },
            error: function(data) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                Toast.fire({
                    icon: 'error',
                    title: data.error,
                });
                window.location.reload();
            }
        });
    });
});