const user = $('.user').data('user');

console.log(user);



if (user) {
    Swal.fire({
      title: 'Akun User',
      text: 'Berhasi ' + user,
      type: 'success',
      icons: 'success'
    })
  }

  $('.hapus-user').on('click', function (e) {

    e.preventDefault();
  
    const href = $(this).attr('href');
  
    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Anda akan menghapus akun user",
      icon: 'warning',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    });
  });