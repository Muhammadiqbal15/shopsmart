const flashdata = $('.flash-data').data('flashdata');
const popuplogin = $('.popuplogin').data('popuplogin');

if (flashdata) {
  Swal.fire({
    title: 'Data',
    text: 'Berhasil ' + flashdata,
    type: 'success',
    icons: 'success'
  });
}

if (popuplogin) {
  Swal.fire({
    title: 'Selamat Datang Admin',
    text: popuplogin + 'Berhasil',
    type: 'success',
    icons: 'success'
  })
}

//hapus barang

$('.tombol-hapus').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data Barang Akan Di Hapus!",
    icons: 'warning',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Data!'
  }).then((result) => {
    if (result.value) {

      document.location.href = href;
    }
  })
})

$('.hapus_pembeli').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Data Akan Di Hapus!',
    text: "Silahkan Cek Barang Sudah Dikirim Atau Belum?",
    icons: 'warning',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Data!'
  }).then((result) => {
    if (result.value) {

      document.location.href = href;
    }
  })
})
