<?php

defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');

        if (!$this->session->userdata('email')) {
            redirect(base_url("Auth/index"));
        }
        $this->load->library('form_validation');
    }


    public function index()
    {

        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->barang_model->getAllBarang();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/index', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function editprofile($id)
    {
        $data['judul'] = 'Edit Profil Kamu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['useredit'] = $this->barang_model->getuserbyid($id);
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Editprofile', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function updateprofil()
    {
        $nama = htmlspecialchars($this->input->post('nama', true));
        $no = htmlspecialchars($this->input->post('notelp', true));
        $prov = htmlspecialchars($this->input->post('provinsi', true));
        $kota = htmlspecialchars($this->input->post('kota', true));
        $kec = htmlspecialchars($this->input->post('kecamatan', true));
        $kel = htmlspecialchars($this->input->post('kelurahan', true));
        $gambar = $_FILES['foto'];
        if ($gambar == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo 'Gagal Upload';
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(

            'nama' => $nama,
            'notelp' => $no,
            'provinsi' => $prov,
            'kota' => $kota,
            'kecamatan' => $kec,
            'kelurahan' => $kel,
            'foto' => $gambar
        );
        $path = './assets/img/';
        @unlink($path . $this->input->post('filelama'));
        $id = $this->input->post('id');

        $kondisi = $this->db->where('id', $id);
        $this->barang_model->updateuser($data, $kondisi);
        $this->session->set_flashdata('edit', 'Diedit');
        redirect('User/index');
    }


    public function baranguser()
    {
        $data['judul'] = 'Barang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->barang_model->getAllBarang();
        $data['jmlbrg'] = $this->sumstokawal();
        $data['pembeli'] = $this->sumpembeli();
        $data['brg_terjual'] = $this->sumbarangterjual();
        $data['sisabarang'] = $this->sumsisabarang();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Baranguser', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('namabrg', 'Nama Barang', 'required');
        $this->form_validation->set_rules('hargabrg', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('jml', 'Jumlah Barang', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Barang';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['barang'] = $this->barang_model->getAllBarang();
            $data['jmlbrg'] = $this->sumstokawal();
            $data['pembeli'] = $this->sumpembeli();
            $data['brg_terjual'] = $this->sumbarangterjual();
            $data['sisabarang'] = $this->sumsisabarang();
            $this->load->view('TemplateUser/HeaderUser', $data);
            $this->load->view('User/Baranguser', $data);
            $this->load->view('TemplateUser/FooterUser');
        } else {
            $namabrg = htmlspecialchars($this->input->post('namabrg', true));
            $hrgbrg = htmlspecialchars($this->input->post('hargabrg', true));
            $jenis = htmlspecialchars($this->input->post('jenis', true));
            $ket = htmlspecialchars($this->input->post('ket', true));
            $jml = htmlspecialchars($this->input->post('jml', true));
            $uom = htmlspecialchars($this->input->post('uom', true));
            $user = htmlspecialchars($this->input->post('user', true));
            $banking = htmlspecialchars($this->input->post('banking', true));
            $money = htmlspecialchars($this->input->post('money', true));
            $gambar = $_FILES['foto'];
            if ($gambar == '') {
            } else {
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(

                'nama_barang'       => $namabrg,
                'harga_barang'      => $hrgbrg,
                'gambar'            => $gambar,
                'jenis_barang'      => $jenis,
                'ket_barang'        => $ket,
                'stokawal'          => $jml,
                'stoksisa'          => $jml,
                'UOM'               => $uom,
                'ebanking'          => $banking,
                'emoney'            => $money,
                'user'              => $user
            );

            $this->barang_model->tambah($data);
            $this->session->set_flashdata('crud', 'Dijual');
            redirect('User/baranguser');
        }
    }

    public function hapus($id_barang)
    {
        $this->barang_model->hapusbarang($id_barang);
        $this->session->set_flashdata('crud', 'Dihapus');
        redirect('User/baranguser');
    }

    public function editbarang($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->barang_model->getbyid($kondisi);
        $data['jenisbarang'] = ['Laptop', 'Mouse', 'Keyboard', 'Mousepad', 'Smartphone', 'Headset&Earphone'];
        $data['keterangan'] = ['Ada', 'Kosong'];
        $data['banking'] = ['BCA Mobile Banking', 'Mandiri Mobile Banking', 'BNI Mobile Banking', 'BRI Mobile Banking'];
        $data['money'] = ['OVO', 'Gopay', 'Paypal'];
        $data['judul'] = 'Edit Barang';
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Editbarang', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function updatebarang()
    {
        $namabrg = htmlspecialchars($this->input->post('namabrg', true));
        $hrgbrg = htmlspecialchars($this->input->post('hargabrg', true));
        $jenis = htmlspecialchars($this->input->post('jenis', true));
        $ket = htmlspecialchars($this->input->post('ket', true));
        $jml = htmlspecialchars($this->input->post('jml', true));
        $uom = htmlspecialchars($this->input->post('uom', true));
        $banking = $this->input->post('banking', true);
        $money = $this->input->post('money', true);
        $gambar = $_FILES['foto'];
        if ($gambar == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(

            'nama_barang'       => $namabrg,
            'harga_barang'      => $hrgbrg,
            'gambar'            => $gambar,
            'jenis_barang'      => $jenis,
            'ket_barang'        => $ket,
            'stoksisa'          => $jml,
            'ebanking'          => $banking,
            'emoney'            => $money,
            'UOM'               => $uom,
        );

        $path = './assets/img/';
        @unlink($path . $this->input->post('filelama'));
        $id = $this->input->post('id');

        $kondisi = $this->db->where('id_barang', $id);
        $this->barang_model->updatebarang($data, $kondisi);
        $this->session->set_flashdata('crud', 'Diubah');
        redirect('User/baranguser');
    }

    public function methodpmbyrn()
    {
        $banking = $this->input->post('banking', true);
        $money = $this->input->post('money', true);

        $data = array(

            'ebanking' => $banking,
            'emoney' => $money
        );
        $this->barang_model->tambahpmbyrn($data);
        $this->session->set_flashdata('pembayaran', 'Tersimpan');
        redirect('User/index');
    }

    public function Pembeliuser()
    {
        $data['judul'] = 'Pembeli';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pembeli'] = $this->barang_model->getPembeli();
        $data['jmlbrg'] = $this->sumstokawal();
        $data['pembeli2'] = $this->sumpembeli();
        $data['brg_terjual'] = $this->sumbarangterjual();
        $data['sisabarang'] = $this->sumsisabarang();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Pembeliuser', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function toko($id)
    {
        $data['judul'] = 'Toko';

        $data['barang'] = $this->barang_model->fortoko($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Toko', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function keranjang($id_barang)
    {
        $barang = $this->barang_model->find($id_barang);
        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga_barang,
            'name'    => $barang->nama_barang,

        );

        $this->cart->insert($data);
        redirect('User/keranjanguser');
    }

    public function keranjanguser()
    {
        $data['judul'] = 'Keranjang Anda';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Keranjang', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function deletekeranjang($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty'   => 0
        );

        $this->cart->update($data);
        $this->session->set_flashdata('keranjang', 'Dihapus');
        redirect('User/keranjanguser');
    }

    public function deleteall()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('cart', 'Dihapus');
        redirect('User/keranjanguser');
    }

    public function kurangcart($rowid, $qty)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty - 1
        );

        $this->cart->update($data);
        redirect('User/keranjanguser');
    }

    public function hapuspembeli($id_pembeli)
    {
        $this->barang_model->hapuspembeli($id_pembeli);
        $this->session->set_flashdata('crud2', 'Dihapus');
        redirect('User/pembeliuser');
    }

    public function sumstokawal()
    {
        $this->db->select_sum('stokawal')->from('barang');
        $this->db->where('user', $this->session->userdata('id'));
        $query = $this->db->get()->result();
        return $query;
    }

    public function sumpembeli()
    {
        $this->db->select_sum('jmlfixed_pembeli')->from('pembeli');
        $this->db->where('usr_penjual', $this->session->userdata('id'));
        $query = $this->db->get()->result();
        return $query;
    }

    public function sumbarangterjual()
    {
        $this->db->select_sum('jumlah_brg')->from('pembeli');
        $this->db->where('usr_penjual', $this->session->userdata('id'));
        $query = $this->db->get()->result();
        return $query;
    }

    public function sumsisabarang()
    {
        $this->db->select_sum('stoksisa')->from('barang');
        $this->db->where('user', $this->session->userdata('id'));
        $query = $this->db->get()->result();
        return $query;
    }
}
