const pesan = $('.pesan').data('pesan');

console.log(pesan);

if(pesan)
{
    Swal.fire({
        title: 'Pesanan',
        text: 'Pesanan Sudah ' + crud2 ,
        type: 'success',
        icons: 'success'

    });
}

$('.hapus_pesan').on('click', function (e) {

    e.preventDefault();
  
    const href = $(this).attr('href');
  
    Swal.fire({
      title: 'Pesanan Akan Dihapus',
      text: "Anda akan menghapus pesanan ini?",
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