const gb = $('.editgb').data('editgb');

console.log(gb);

if (gb) {
  Swal.fire({

    title: 'Gambar Atau Foto',
    text: 'Berhasil ' + gb,
    type: 'success',
    icon: 'success'
  });
}
