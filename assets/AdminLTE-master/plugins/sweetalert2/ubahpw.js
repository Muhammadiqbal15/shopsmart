const ubahpw = $('.ubahpw').data('ubahpw');
console.log(ubahpw);

if (ubahpw) {
  Swal.fire({
    title: 'Password',
    text: 'Berhasil ' + ubahpw,
    type: 'success',
    icons: 'success'
  })
}
