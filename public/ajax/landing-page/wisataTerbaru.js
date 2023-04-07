$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// ADD
$(document).ready(function(){
    $('#add-btn').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: `/wisata-terbaru`,
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                setTimeout(() => {
                    if (response.success) {
                        window.location.reload();
                    }
                }, 2000);
            },
            error: function (xhr, status, error) {
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
});

// DELETE
$(document).on('click', '#delete-btn', function () {
    var id = $(this).data('id');
    Swal.fire({
        title: 'Anda yakin ingin menghapus data ini?',
        text: 'Data yang sudah dihapus tidak dapat dikembalikan.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: `/wisata-terbaru/` + id,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function (data) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: data.success,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }
                    });
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });
});

// SHOW
$(document).on('click', '#show-btn', function() {

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    let id = $(this).data('id');

    $.ajax({
        url: `/wisata-terbaru/${id}`,
        type: "GET",
        cache: false,
        success: function(response) {
            $('#id_update').val(response.data.id);
            $('#img-update').attr('src', `${response.data.src}`);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});

// UPDATE
$('#update-form').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: `wisata-terbaru/update`,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            setTimeout(() => {
                if (response.success) {
                    window.location.reload();
                }
            }, 1000);

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

