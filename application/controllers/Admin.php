<?php

// Load library phpspreadsheet
require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        if (!$this->session->userdata('email')) {
            redirect(base_url("Auth/index"));
        } else {

            $role = $this->session->userdata('role_id');
            if ($role > 1) {
                redirect('Auth/blok');
            }
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Admin/index';
        $config['total_rows'] = $this->barang_model->countalluser();
        $config['per_page'] = 5;

        //style pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize 
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->barang_model->getalluser($config['per_page'], $data['start']);
        $data['sumuser'] = $this->sumuser();
        $data['stokawal'] = $this->stokawal();
        $data['brgterjual'] = $this->barangterjual();
        $data['sisa'] = $this->stokakhir();
        $data['transaksi'] = $this->totaltransaksi();
        $data['useraktif'] = $this->sumuseraktif();
        $data['usertdkaktif'] = $this->sumusertdkaktif();
        if ($this->input->post('keyword')) {
            $data['Barang'] = $this->barang_model->caribarang();
        }
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function tampiluser($id)
    {
        $data['judul'] = 'Dashboard';
        $data['user1'] = $this->barang_model->getuserbyid($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/index', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function barangjualuser()
    {
        $data['judul'] = 'Barang';

        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Admin/Barangjualuser';
        $config['total_rows'] = $this->barang_model->countallbarangadmin();
        $config['per_page'] = 5;

        //style pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize 
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);

        $data['barang'] = $this->barang_model->getallbrgforadmin($config['per_page'], $data['start']);
        $data['sumuser'] = $this->sumuser();
        $data['stokawal'] = $this->stokawal();
        $data['brgterjual'] = $this->barangterjual();
        $data['sisa'] = $this->stokakhir();
        $data['transaksi'] = $this->totaltransaksi();
        $data['useraktif'] = $this->sumuseraktif();
        $data['usertdkaktif'] = $this->sumusertdkaktif();
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang();
        }
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Barangygdijual', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function transaksiuser()
    {
        $data['judul'] = 'Transaksi User';

        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Admin/transaksiuser';
        $config['total_rows'] = $this->barang_model->countalltransaksi();
        $config['per_page'] = 5;

        //style pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize 
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);

        $data['sumuser'] = $this->sumuser();
        $data['stokawal'] = $this->stokawal();
        $data['brgterjual'] = $this->barangterjual();
        $data['sisa'] = $this->stokakhir();
        $data['transaksi1'] = $this->totaltransaksi();
        $data['useraktif'] = $this->sumuseraktif();
        $data['usertdkaktif'] = $this->sumusertdkaktif();
        $data['transaksi'] = $this->barang_model->getallpembeliforadmin($config['per_page'], $data['start']);
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Transaksi', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function ubahbanner()
    {
        $data['judul'] = 'Ubah Banner Home';

        $data['gambar'] = $this->barang_model->getallbanner();
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Ubahbanner', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function tp_banner($id_barang)
    {
        $data['judul'] = 'Ubah Banner Home';

        $data['gambar'] = $this->barang_model->getallbanner();
        $data['gmbr'] = $this->barang_model->getbannerbyid($id_barang);
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Tp_ubahbanner', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function updatebnnr()
    {
        $gambar1 = $_FILES['gb1'];
        if ($gambar1 == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gb1')) {
                echo 'Gagal Upload';
                die();
            } else {
                $gambar1 = $this->upload->data('file_name');
            }
        }

        $gambar2 = $_FILES['gb2'];
        if ($gambar2 == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gb2')) {
                echo 'Gagal Upload';
                die();
            } else {
                $gambar2 = $this->upload->data('file_name');
            }
        }

        $gambar3 = $_FILES['gb3'];
        if ($gambar3 == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gb3')) {
                echo 'Gagal Upload';
                die();
            } else {
                $gambar3 = $this->upload->data('file_name');
            }
        }

        $data = array(
            'gb_1' => $gambar1,
            'gb_2' => $gambar2,
            'gb_3' => $gambar3
        );
        $path = './assets/img/';
        @unlink($path . $this->input->post('filelama'));
        $id = $this->input->post('id_gb');

        $kondisi = $this->db->where('id_gambar', $id);
        $this->barang_model->updatebanner($data, $kondisi);
        $this->session->set_flashdata('editgb', 'Diubah');
        redirect('Admin/ubahbanner');
    }

    public function useraktif()
    {

        $data['judul'] = 'User Aktif';
        $data['sumuser'] = $this->sumuser();
        $data['stokawal'] = $this->stokawal();
        $data['brgterjual'] = $this->barangterjual();
        $data['sisa'] = $this->stokakhir();
        $data['transaksi'] = $this->totaltransaksi();
        $data['useraktif'] = $this->sumuseraktif();
        $data['usertdkaktif'] = $this->sumusertdkaktif();
        $data['user'] = $this->barang_model->getuseraktif();
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Useraktif', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function usertdkaktif()
    {
        $data['judul'] = 'User Tidak Aktif';
        $data['sumuser'] = $this->sumuser();
        $data['stokawal'] = $this->stokawal();
        $data['brgterjual'] = $this->barangterjual();
        $data['sisa'] = $this->stokakhir();
        $data['transaksi'] = $this->totaltransaksi();
        $data['useraktif'] = $this->sumuseraktif();
        $data['usertdkaktif'] = $this->sumusertdkaktif();
        $data['user'] = $this->barang_model->getusertdkaktif();
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Usertdkaktif', $data);
        $this->load->view('TemplateAdmin/Footer');
    }


    public function sumuser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sumuseraktif()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sumusertdkaktif()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_active', 0);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function stokawal()
    {
        $this->db->select_sum('stokawal')->from('barang');
        $query = $this->db->get()->result();
        return $query;
    }

    public function barangterjual()
    {
        $this->db->select_sum('jumlah_brg')->from('pembeli');
        $query = $this->db->get()->result();
        return $query;
    }

    public function stokakhir()
    {
        $this->db->select_sum('stoksisa')->from('barang');
        $query = $this->db->get()->result();
        return $query;
    }

    public function totaltransaksi()
    {
        $this->db->select_sum('jmlfixed_pembeli')->from('pembeli');
        $query = $this->db->get()->result();
        return $query;
    }

    public function Pdf()
    {
        $this->load->library('dompdf_gen');

        $data['user'] = $this->barang_model->getuser();


        $this->load->view('Admin/LaporanPDF', $data);


        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_User.pdf", array('Attachment' => 0));
    }


    public function pdfbarang()
    {
        $this->load->library('dompdf_gen');

        $data['barang'] = $this->barang_model->getbrg();


        $this->load->view('Admin/LaporanPDFbrg', $data);


        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_BarangUser.pdf", array('Attachment' => 0));
    }

    public function pdftransaksi()
    {
        $this->load->library('dompdf_gen');

        $data['pembeli'] = $this->barang_model->getpembli();


        $this->load->view('Admin/LaporanPDFtransaksi', $data);


        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_BarangUser.pdf", array('Attachment' => 0));
    }

    public function pdfuseraktif()
    {
        $this->load->library('dompdf_gen');
        $data['user'] = $this->barang_model->getuseraktif();

        $this->load->view('Admin/LaporanPDFuseraktif', $data);


        $paper_size = 'A3';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_BarangUser.pdf", array('Attachment' => 0));
    }

    public function pdfusertdkaktif()
    {
        $this->load->library('dompdf_gen');
        $data['user'] = $this->barang_model->getusertdkaktif();

        $this->load->view('Admin/LaporanPDFusertdkaktif', $data);


        $paper_size = 'A3';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_BarangUser.pdf", array('Attachment' => 0));
    }

    public function excel()
    {
        $data['user'] = $this->barang_model->getuser();

        $object = new Spreadsheet();

        $object->getProperties()->setCreator("Data User");
        $object->getProperties()->setLastModifiedBy("Data User");
        $object->getProperties()->setTitle("Data User");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA');
        $object->getActiveSheet()->setCellValue('D1', 'EMAIL');
        $object->getActiveSheet()->setCellValue('E1', 'FOTO');
        $object->getActiveSheet()->setCellValue('F1', 'PROVINSI');
        $object->getActiveSheet()->setCellValue('G1', 'KABUPATEN/KOTA');
        $object->getActiveSheet()->setCellValue('H1', 'KECAMATAN');
        $object->getActiveSheet()->setCellValue('I1', 'KELURAHAN');
        $object->getActiveSheet()->setCellValue('J1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('K1', 'NOTELP');


        $baris = 2;
        $no=1;

        foreach ($data['user'] as $usr) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $usr['id']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $usr['nama']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $usr['email']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $usr['foto']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $usr['provinsi']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $usr['kota']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $usr['kecamatan']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $usr['kelurahan']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $usr['alamat']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $usr['notelp']);

            $baris++;
        }

        $filename = "Data User";

        $object->getActiveSheet()->setTitle("Data User");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($object, 'Xlsx');
        $writer->save('php://output');

        exit;        
    }

    public function excelbrg()
    {
        $data['barang'] = $this->barang_model->getbrg();

        $object = new Spreadsheet();

        $object->getProperties()->setCreator("Data Barang User");
        $object->getProperties()->setLastModifiedBy("Data Barang User");
        $object->getProperties()->setTitle("Data Barang User");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA BARANG');
        $object->getActiveSheet()->setCellValue('D1', 'HARGA BARANG');
        $object->getActiveSheet()->setCellValue('E1', 'FOTO');
        $object->getActiveSheet()->setCellValue('F1', 'JENIS BARANG');
        $object->getActiveSheet()->setCellValue('G1', 'STOK AWAL');
        $object->getActiveSheet()->setCellValue('H1', 'STOK SISA');
        $object->getActiveSheet()->setCellValue('I1', 'PEMBAYARAN BANKING');
        $object->getActiveSheet()->setCellValue('J1', 'PEMBAYARAN EMONEY');
        $object->getActiveSheet()->setCellValue('K1', 'PENJUAL');


        $baris = 2;
        $no=1;

        foreach ($data['barang'] as $brg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $brg['id_barang']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $brg['nama_barang']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $brg['harga_barang']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $brg['gambar']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $brg['jenis_barang']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $brg['stokawal']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $brg['stoksisa']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $brg['ebanking']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $brg['emoney']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $brg['nama']);

            $baris++;
        }

        $filename = "Data Barang User";

        $object->getActiveSheet()->setTitle("Data Barang User");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($object, 'Xlsx');
        $writer->save('php://output');

        exit;        
    }


    public function exceltransaksi()
    {
        $data['pembeli'] = $this->barang_model->getpembli();

        $object = new Spreadsheet();

        $object->getProperties()->setCreator("Data Transaksi User");
        $object->getProperties()->setLastModifiedBy("Data Transaksi User");
        $object->getProperties()->setTitle("Data Transaksi User");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA PEMBELI');
        $object->getActiveSheet()->setCellValue('D1', 'NOMOR TELEPON');
        $object->getActiveSheet()->setCellValue('E1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('F1', 'NAMA BARANG');
        $object->getActiveSheet()->setCellValue('G1', 'HARGA BARANG');
        $object->getActiveSheet()->setCellValue('H1', 'JUMLAH BARANG');
        $object->getActiveSheet()->setCellValue('I1', 'TOTAL HARGA');
        $object->getActiveSheet()->setCellValue('J1', 'PENGIRIMAN');
        $object->getActiveSheet()->setCellValue('K1', 'PEMBAYARAN');
        $object->getActiveSheet()->setCellValue('L1', 'PROVINSI');
        $object->getActiveSheet()->setCellValue('M1', 'KABUPATEN/KOTA');
        $object->getActiveSheet()->setCellValue('N1', 'KECAMATAN');
        $object->getActiveSheet()->setCellValue('O1', 'KELURAHAN');


        $baris = 2;
        $no=1;

        foreach ($data['pembeli'] as $pb) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $pb['id_pembeli']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $pb['nama_pb']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $pb['notelp']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $pb['alamat']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $pb['nama_brg']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $pb['harga_brg']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $pb['jumlah_brg']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $pb['tot_hrg']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $pb['pengiriman']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $pb['pembayaran']);
            $object->getActiveSheet()->setCellValue('L' . $baris, $pb['provinsi']);
            $object->getActiveSheet()->setCellValue('M' . $baris, $pb['kota']);
            $object->getActiveSheet()->setCellValue('N' . $baris, $pb['kecamatan']);
            $object->getActiveSheet()->setCellValue('O' . $baris, $pb['kelurahan']);

            $baris++;
        }

        $filename = "Data Transaksi User";

        $object->getActiveSheet()->setTitle("Data Transaksi User");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($object, 'Xlsx');
        $writer->save('php://output');

        exit;      
    }

    public function exceluseraktif()
    {
        $data['user'] = $this->barang_model->getuseraktif();


        $object = new Spreadsheet();

        $object->getProperties()->setCreator("Data User Aktif");
        $object->getProperties()->setLastModifiedBy("Data User Aktif");
        $object->getProperties()->setTitle("Data User Aktif");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA');
        $object->getActiveSheet()->setCellValue('D1', 'EMAIL');
        $object->getActiveSheet()->setCellValue('E1', 'FOTO');
        $object->getActiveSheet()->setCellValue('F1', 'PROVINSI');
        $object->getActiveSheet()->setCellValue('G1', 'KABUPATEN/KOTA');
        $object->getActiveSheet()->setCellValue('H1', 'KECAMATAN');
        $object->getActiveSheet()->setCellValue('I1', 'KELURAHAN');
        $object->getActiveSheet()->setCellValue('J1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('K1', 'NOTELP');


        $baris = 2;
        $no=1;

        foreach ($data['user'] as $usr) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $usr['id']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $usr['nama']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $usr['email']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $usr['foto']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $usr['provinsi']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $usr['kota']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $usr['kecamatan']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $usr['kelurahan']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $usr['alamat']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $usr['notelp']);

            $baris++;
        }

        $filename = "Data User Aktif";

        $object->getActiveSheet()->setTitle("Data User Aktif");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($object, 'Xlsx');
        $writer->save('php://output');

        exit;        
        
    }

    public function excelusertdkaktif()
    {
        $data['user'] = $this->barang_model->getusertdkaktif();


        $object = new Spreadsheet();

        $object->getProperties()->setCreator("Data User Tidak Aktif");
        $object->getProperties()->setLastModifiedBy("Data User Tidak Aktif");
        $object->getProperties()->setTitle("Data User Tidak Aktif");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'ID');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA');
        $object->getActiveSheet()->setCellValue('D1', 'EMAIL');
        $object->getActiveSheet()->setCellValue('E1', 'FOTO');
        $object->getActiveSheet()->setCellValue('F1', 'PROVINSI');
        $object->getActiveSheet()->setCellValue('G1', 'KABUPATEN/KOTA');
        $object->getActiveSheet()->setCellValue('H1', 'KECAMATAN');
        $object->getActiveSheet()->setCellValue('I1', 'KELURAHAN');
        $object->getActiveSheet()->setCellValue('J1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('K1', 'NOTELP');


        $baris = 2;
        $no=1;

        foreach ($data['user'] as $usr) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $usr['id']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $usr['nama']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $usr['email']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $usr['foto']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $usr['provinsi']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $usr['kota']);
            $object->getActiveSheet()->setCellValue('H' . $baris, $usr['kecamatan']);
            $object->getActiveSheet()->setCellValue('I' . $baris, $usr['kelurahan']);
            $object->getActiveSheet()->setCellValue('J' . $baris, $usr['alamat']);
            $object->getActiveSheet()->setCellValue('K' . $baris, $usr['notelp']);

            $baris++;
        }

        $filename = "Data User Tidak Aktif";

        $object->getActiveSheet()->setTitle("Data User Tidak Aktif");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($object, 'Xlsx');
        $writer->save('php://output');

        exit;        
    }
}
