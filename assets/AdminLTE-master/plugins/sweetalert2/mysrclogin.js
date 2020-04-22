const regist = $('.regist').data('regist');


if (regist) {
  Swal.fire({
    title: 'Terdaftar',
    text: 'Akun Mu ' + regist,
    type: 'success',
    icons: 'success'
  });
}
