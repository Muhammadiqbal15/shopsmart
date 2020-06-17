const crud2 = $('.crud2').data('crud2');

console.log(crud2);

if(crud2)
{
    Swal.fire({
        title: 'Data Pembeli',
        text: 'Data Pembeli Sudah ' + crud2 ,
        type: 'success',
        icons: 'success'

    });
}


$('.hapus-pembeli').on('click', function (e) {

    e.preventDefault();
  
    const href = $(this).attr('href');
  
    Swal.fire({
      title: 'Apakah Barang Sudah Dikirim?',
      text: "Anda akan menghapus data pembeli ini",
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
  