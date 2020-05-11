const keranjang = $('.keranjang').data('keranjang');
console.log(keranjang);


if (keranjang) {
  Swal.fire({

    title: 'Item',
    text: 'Berhasil ' + keranjang,
    type: 'success',
    icon: 'success'
  });
}

$('.hapus-brgkrjng').on('click', function (e) {

  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Item Akan Dihapus Dari Keranjang",
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
const cart = $('.cart').data('cart');
console.log(cart);


if (cart) {
  Swal.fire({

    title: 'Semua Item',
    text: 'Berhasil ' + cart,
    type: 'success',
    icon: 'success'
  });
}

$('.delete-semua').on('click', function (e) {

  e.preventDefault();

  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Semua Item Akan Dihapus Dari Keranjang",
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
