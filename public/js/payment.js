$(document).ready(function() {
    $('#addpayment').click(function(e) {
        e.preventDefault()
        $('#paymentModal').modal('show');
    });

    $('.paymentedit').click(function(e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');

        
        $.ajax({
            type: 'GET',
            async: false,
            url: '/payment/edit/' + mid,
            success: function(response) {
                // console.log(response.payment_title+$('#editpayment_code').attr('placeholder'))
                $('#editjamb_no').val(response.jamb_no);
                $('#editamount').val(response.amount);
                $('#editstatus').val(response.status);
               
            },
            error: function(response) {
                alert(response.responseText);
            }
        });
        $('#paymenteditModal').modal('show');
    });

   

    $('.paymentdelete').click(function(e) {
        e.preventDefault()
        $('#paymentdeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#paymentdeleteModal').modal('show');
    });

    $('#paymentdeletelinkmodal').click(function() {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/payment/delete/' + $(this).attr('data-id'),
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