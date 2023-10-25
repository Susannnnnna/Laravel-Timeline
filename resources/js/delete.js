$(function() {
    $('.delete').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            $.ajax({
                method: "DELETE",
                url: deleteUrl + $(this).data("id")
            })
            .done(function(response) {
                window.location.reload();
            })
            .fail(function(data) {
                Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status)
            });
        });
    });
});