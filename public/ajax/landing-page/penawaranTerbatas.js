$(document).on('click', '#show-penawaran', function() {

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    let id = $(this).data('id');

    $.ajax({
        url: `/show-penawaran-terbatas/${id}`,
        type: "GET",
        cache: false,
        success: function(response) {
            $('#title_update').val(response.data.title);
            $('#id_update').val(response.data.id);
            $('#img-update').attr('src', `${response.data.image}`);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});

$('#update-btn').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: `show-penawaran-terbatas/update`,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.success) {
                window.location.reload();
            }

            Swal.fire({
                type: 'success',
                icon: 'success',
                title: `${response.message}`,
                showConfirmButton: false,
                timer: 3000
            });
        },
        error: function(xhr, status, error) {
            Swal.fire({
                type: 'error',
                icon: 'error',
                title: `Gagal Menambah Data!`,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
});

