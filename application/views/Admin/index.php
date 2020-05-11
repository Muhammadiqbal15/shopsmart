<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url() ?>Home/index" class="nav-link"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link" data-target="#kalkulator" data-toggle="modal"><i class="fas fa-calculator"></i> Calculator</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url(); ?>assets/AdminLTE-master/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <h3 style="color: white;">Admin</h3>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url(); ?>Admin/index" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Data User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Admin/Pembeli" class="nav-link">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>Data User Terblock</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Log out</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <br><br><br>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data User</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- Left col -->

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <div class="popuplogin" data-popuplogin="<?= $this->session->flashdata('popup'); ?>"></div>
            <section class="col-lg-12 connectedSortable">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered table-head-fixed mt-3" id="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Alamat</th>
                        <th>Notelp</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <?php foreach ($user as $usr) : ?>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><?= $usr['id']; ?></td>
                          <td><?= $usr['nama']; ?></td>
                          <td><?= $usr['email']; ?></td>
                          <td><img src="<?= base_url(); ?>assets/img/<?= $usr['foto']; ?>" alt="" width="70" height="70"></td>
                          <td><?= $usr['alamat']; ?></td>
                          <td><?= $usr['notelp']; ?></td>
                          <td>
                            <a href="" class="btn btn-danger">Block</a>
                          </td>
                        </tr>
                      </tbody>
                    <?php endforeach; ?>
                  </table>
                </div>
              </div>
              <?= $this->pagination->create_links(); ?>
            </section>
          </div>
        </div>
      </section>
    </div>
  </div>


  <div class="modal fade modal-sm" id="kalkulator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Calculator</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputangka">Angka : </label>
              <input type="text" class="form-control" id="inputangka">
            </div>
          </div>
          <div class="form-group">
            <label for="hasil">Hasil : </label>
            <input type="text" class="form-control" id="hasil">
          </div>

          <div>
            <button class="btn btn-primary btn-lg" onclick="getdata('1')">1</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('2')">2</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('3')">3</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('+')">+</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('-')">-</button>
          </div>
          <div class="mt-1">
            <button class="btn btn-primary btn-lg" onclick="getdata('4')">4</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('5')">5</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('6')">6</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('*')">*</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('/')">/</button>
          </div>
          <div class="mt-1">
            <button class="btn btn-primary btn-lg" onclick="getdata('7')">7</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('8')">8</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('9')">9</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('(')">(</button>
            <button class="btn btn-primary btn-lg" onclick="getdata(')')">)</button>
          </div>
          <div class="mt-1">
            <button class="btn btn-primary btn-lg" onclick="getdata('0')">0</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('**')">^</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('.')">.</button>
            <button class="btn btn-primary btn-lg" onclick="getdata('%')">%</button>
          </div>
          <div class="mt-1">
            <button class="btn btn-success btn-lg" onclick="inputvalidation()">=</button>
            <button class="btn btn-danger btn-lg" onclick="clearAll()">C</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <h5 class="card-header bg-dark">Ubah Data Barang</h5>
            <div class="card-body">
              <?php echo form_open_multipart('Admin/updatedata/') ?>
              <!-- file lama -->
              <input type="hidden" name="filelama" value="<?= $brg['gambar']; ?>">
              <!-- ID -->
              <input type="hidden" name="id_barang" id="idbarang">
              <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" id="namabrg" name="namabrg" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="hrgbarang">Harga Barang</label>
                <input type="text" class="form-control" id="hrgbarang" name="hargabrg" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="gambar">Foto</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
              </div>
              <div class="form-group">
                <label for="stok">Jumlah Barang</label>
                <input type="text" class="form-control" id="stok" name="stok" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="jenis">Satuan Barang</label>
                <select class="form-control" id="satuan" name="uom">
                  <option>Unit</option>
                </select>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Barang</label>
                <select class="form-control" id="jenis" name="jenis">
                  <?php foreach ($jenisbrg as $jb) : ?>
                    <?php if ($jb ==  $brg['jenis_barang']) : ?>
                      <option value="<?= $jb; ?>" selected><?= $jb; ?></option>
                    <?php else : ?>
                      <option value="<?= $jb; ?>"><?= $jb; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="Keterangan">Keterangan Barang</label>
                <select class="form-control" id="keterangan" name="ket">
                  <?php foreach ($keterangan as $ket) : ?>
                    <?php if ($ket ==  $brg['ket_barang']) : ?>
                      <option value="<?= $ket; ?>" selected><?= $ket; ?></option>
                    <?php else : ?>
                      <option value="<?= $ket; ?>"><?= $ket; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
              <button class="btn btn-primary float-right mt-2" type="submit" name="ubah">Ubah</button>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <h5 class="card-header bg-dark">Tambah Data Barang</h5>
            <div class="card-body">
              <?php echo form_open_multipart('Admin/insertdata'); ?>
              <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabrg" autocomplete="off">
              </div>
              <small class="text-danger">
                <?= form_error('namabrg'); ?>
              </small>
              <div class="form-group">
                <label for="hrgbarang">Harga Barang</label>
                <input type="text" class="form-control" id="hrgbarang" name="hargabrg" autocomplete="off">
              </div>
              <small class="text-danger">
                <?= form_error('hargabrg'); ?>
              </small>
              <div class="form-group">
                <label for="gambar">Foto</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah" name="jml" autocomplete="off">
              </div>
              <small class="text-danger">
                <?= form_error('jml'); ?>
              </small>
              <div class="form-group">
                <label for="jenis">Satuan Barang</label>
                <select class="form-control" id="jenis" name="uom">
                  <option>Unit</option>
                </select>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Barang</label>
                <select class="form-control" id="jenis" name="jenis">
                  <option>Laptop</option>
                  <option>Mouse</option>
                  <option>Keyboard</option>
                  <option>Mousepad</option>
                  <option>SmartPhone</option>
                  <option>Headset&Earphone</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Keterangan">Keterangan Barang</label>
                <select class="form-control" id="keterangan" name="ket">
                  <option>Ada</option>
                  <option>Kosong</option>
                </select>
              </div>
              <button class="btn btn-primary float-right mt-2" type="submit" name="tambah">Tambah</button>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h4 class="modal-title" id="image-gallery-title"></h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
          </button>
        </div>
        <div class="modal-body py-0">
          <img id="image-gallery-image" class="rounded img-fluid" src="">
        </div>
      </div>
    </div>
  </div>
</body>



<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var namabarang = $(this).data('namabrg');
      var hargabarang = $(this).data('harga');
      var jumlah = $(this).data('jumlah');
      var satuan = $(this).data('satuan');
      var jenis = $(this).data('jenis');
      var ket = $(this).data('ket')
      var id = $(this).data('idbarang');
      $('#idbarang').val(id);
      $('#keterangan').val(ket);
      $('#jenis').val(jenis);
      $('#satuan').val(satuan);
      $('#stok').val(jumlah);
      $('#hrgbarang').val(hargabarang);
      $('#namabrg').val(namabarang);

    })
  })
</script>
<script>
  $(document).ready(function() {
    $('#table').DataTable({
      "paging": false

    });
  });
</script>
<script>
  let modalId = $('#image-gallery');
  $(document)
    .ready(function() {
      loadGallery(true, 'a.thumbnail');

      function disableButtons(counter_max, counter_current) {
        $('#show-prev-image, #show-next-image')
          .show();
        if (counter_max === counter_current) {
          $('#show-next-image')
            .hide();
        } else if (counter_current === 1) {
          $('#show-prev-image')
            .hide();
        }
      }

      function loadGallery(setIDs, setClickAttr) {
        let current_image, selector, counter = 0;
        $('#show-next-image, #show-prev-image')
          .click(function() {
            if ($(this)
              .attr('id') === 'show-prev-image') {
              current_image--;
            } else {
              current_image++;
            }
            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
          });

        function updateGallery(selector) {
          let $sel = selector;
          current_image = $sel.data('image-id');
          $('#image-gallery-title')
            .text($sel.data('title'));
          $('#image-gallery-image')
            .attr('src', $sel.data('image'));
          disableButtons(counter, $sel.data('image-id'));
        }
        if (setIDs == true) {
          $('[data-image-id]')
            .each(function() {
              counter++;
              $(this)
                .attr('data-image-id', counter);
            });
        }
        $(setClickAttr)
          .on('click', function() {
            updateGallery($(this));
          });
      }
    });
</script>