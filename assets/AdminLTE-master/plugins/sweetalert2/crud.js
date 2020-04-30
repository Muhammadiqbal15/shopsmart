const crud = $('.crud').data('crud');

console.log(crud);


if (crud) {
  Swal.fire({

    title: 'Barang',
    text: 'Berhasil ' + crud,
    type: 'success',
    icons: 'success'
  });
}

$('.tombol-hapus').on('click', function (e) {

  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Anda akan menghapus barang ini",
    icon: 'warning',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});
