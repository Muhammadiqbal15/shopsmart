const login = $('.login').data('login');
const logout = $('.logout').data('logout');

console.log(logout);

console.log(login);

if (login) {
  Swal.fire({
    title: 'Halo ' + login,
    text: 'Silahkan Cek Profil Mu Terlebih Dulu',
    type: 'success',
    icon: 'success'
  });
}

if (logout) {
  Swal.fire({
    title: 'Anda ' + logout,
    type: 'success',
    icon: 'success'
  });
}
