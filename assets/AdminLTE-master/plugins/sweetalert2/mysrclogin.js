const regist = $('.regist').data('regist');
console.log(regist);

if (regist) {
  Swal.fire({
    title: 'Terdaftar',
    text: 'Akun Mu ' + regist,
    type: 'success',
    icons: 'success'
  });
}
