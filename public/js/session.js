$(document).ready(function() {
    $('#addsession').click(function(e) {
        e.preventDefault()
        $('#sessionModal').modal('show');
    });

    $('.sessionedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');
        console.log(mid);

        
        $.ajax({
            type: 'GET',
            async: false,
            url: '/session/edit/' + mid,
            success: function(response) {
                console.log(response);
                $('#editsession_name').val(response.session_name);
                $('#editsession_id').val(response.session_id);
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#sessioneditModal').modal('show');
    }); 

   

    $('.sessiondelete').click(function(e) {
        e.preventDefault()
        $('#sessiondeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#sessiondeleteModal').modal('show');
    });

    $('#sessiondeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/session/delete/' + $(this).attr('data-id'),
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