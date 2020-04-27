const edit = $('.edit').data('edit');

if (edit) {
  Swal.fire({
    title: 'Profil Mu',
    text: 'Berhasi ' + edit,
    type: 'success',
    icons: 'success'
  })
}
