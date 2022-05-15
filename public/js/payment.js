$(document).ready(function () {
    $('#addpayment').click(function (e) {
        e.preventDefault()
        $('#paymentModal').modal('show');
    });

    $('.paymentedit').click(function (e) {
        e.preventDefault()
        let mid = $(this).attr('data-id');


        $.ajax({
            type: 'GET',
            async: false,
            url: '/payment/edit/' + mid,
            success: function (response) {
                // console.log(response.payment_title+$('#editpayment_code').attr('placeholder'))
                $('#editjamb_no').val(response.jamb_no);
                $('#editamount').val(response.amount);
                $('#editstatus').val(response.status);

            },
            error: function (response) {
                alert(response.responseText);
            }
        });
        $('#paymenteditModal').modal('show');
    });



    $('.paymentdelete').click(function (e) {
        e.preventDefault()
        $('#paymentdeletelinkmodal').attr('data-id', $(this).attr('data-id'));
        $('#paymentdeleteModal').modal('show');
    });

    $('#paymentdeletelinkmodal').click(function () {
        $.ajax({
            type: 'GET',
            async: false,
            url: '/payment/delete/' + $(this).attr('data-id'),
            success: function (data) {
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
            error: function (data) {
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
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_b4e57fc9060cd4f2d553bbaa2317ebfbbf2ca758', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      console.log(response.reference);
      window.location="http://127.0.0.1:8000/profile";
    }
  });
  handler.openIframe();
}