const edit = $('.edit').data('edit');
const pembayaran = $('.pembayaran').data('pembayaran');

console.log(pembayaran);

if (edit) {
  Swal.fire({
    title: 'Profil Mu',
    text: 'Berhasi ' + edit,
    type: 'success',
    icons: 'success'
  })
}
