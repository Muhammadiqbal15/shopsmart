const pembayaran = $('.pembayaran').data('pembayaran');

console.log(pembayaran);
if (pembayaran) {
  Swal.fire({
    title: 'Metode Pembayran',
    text: 'Telah ' + pembayaran,
    type: 'success',
    icons: 'success'
  });
}
