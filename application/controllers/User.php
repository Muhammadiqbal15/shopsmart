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
        $nama = $this->input->post('nama', true);
        $tgl = $this->input->post('tgllahir', true);
        $no = $this->input->post('notelp', true);
        $prov = $this->input->post('provinsi', true);
        $kota = $this->input->post('kota', true);
        $kec = $this->input->post('kecamatan', true);
        $kel = $this->input->post('kelurahan', true);
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
            'tgllahir' => $tgl,
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
}
