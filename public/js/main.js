$(document).ready(function() {

   

    $('#addfaculty').click(function(e) {
        e.preventDefault()
        $('#facultyModal').modal('show');
    });

    $('.facultyedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');

        
        $.ajax({
            type: 'GET',
            async: false,
            url: '/faculty/edit/' + mid,
            success: function(response) {
                $('#facul_name').val(response.faculty_name);
                $('#facul_id').val(response.faculty_id);
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#facultyeditModal').modal('show');
    });

   

    $('.facultydelete').click(function(e) {
        e.preventDefault()
        $('#facultydeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#facultydeleteModal').modal('show');
    });

    $('#facultydeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/faculty/delete/' + $(this).attr('data-id'),
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