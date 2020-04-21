const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
  Swal.fire({
    title: 'Terima Kasih Telah Melakukan Pembelian',
    text: flashdata + ' Akan Segera Dikirim Ke Alamat Mu',
    type: 'success',
    icons: 'success'
  });
}
