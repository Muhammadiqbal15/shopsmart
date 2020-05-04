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
    }


    public function index()
    {

        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Baranguser', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function tambah()
    {
        $namabrg = htmlspecialchars($this->input->post('namabrg', true));
        $hrgbrg = htmlspecialchars($this->input->post('hargabrg', true));
        $jenis = htmlspecialchars($this->input->post('jenis', true));
        $ket = htmlspecialchars($this->input->post('ket', true));
        $jml = htmlspecialchars($this->input->post('jml', true));
        $uom = htmlspecialchars($this->input->post('uom', true));
        $user = htmlspecialchars($this->input->post('user', true));
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
            'jumlah'            => $jml,
            'UOM'               => $uom,
            'user'              => $user
        );

        $this->barang_model->tambah($data);
        $this->session->set_flashdata('crud', 'Dijual');
        redirect('User/baranguser');
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
            'jumlah'            => $jml,
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
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/Pembeliuser', $data);
        $this->load->view('TemplateUser/FooterUser');
    }
}
