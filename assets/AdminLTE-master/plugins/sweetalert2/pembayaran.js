const pmbyrn = $('.pembayaran').data('pembayaran');
console.log(pmbyrn);

if (pmbyrn) {
  Swal.fire({
    title: 'Metode Pembayaran',
    text: 'Telah ' + pmbyrn,
    type: 'success',
    icon: 'success'
  });
}
