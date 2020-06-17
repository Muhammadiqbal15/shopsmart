const kirim = $('.kirim').data('kirim');

console.log(kirim);

if (kirim) {
    Swal.fire({
  
      title: 'Barang',
      text: kirim,
      type: 'success',
      icons: 'success'
    });
  }