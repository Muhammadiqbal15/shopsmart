<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('TemplateAuth/HeaderAuth', $data);
            $this->load->view('Auth/index');
            $this->load->view('TemplateAuth/FooterAuth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($pass, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'status' => 'login'
                    ];
                    $this->session->set_userdata($data);
                    redirect('Home/index');
                } else {
                    $this->session->set_flashdata('eroremail', '<div class="alert alert-danger" role="alert">
                    Password salah
                    </div>');
                    redirect('Auth/index');
                }
            } else {
                $this->session->set_flashdata('eroremail', '<div class="alert alert-danger" role="alert">
                Email belum diaktifasi
                </div>');
                redirect('Auth/index');
            }
        } else {
            $this->session->set_flashdata('eroremail', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar
            </div>');
            redirect('Auth/index');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[re-pass]');
        $this->form_validation->set_rules('re-pass', 'Retype Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('nomortlp', 'NomorTelp', 'required|trim|min_length[12]|max_length[12]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('Provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('Kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('Kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('Kelurahan', 'Kelurahan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration';
            $this->load->view('TemplateAuth/HeaderAuth', $data);
            $this->load->view('Auth/registrasi', $data);
            $this->load->view('TemplateAuth/FooterAuth');
        } else {

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'notelp' => htmlspecialchars($this->input->post('nomortlp', true)),
                'provinsi' => htmlspecialchars($this->input->post('Provinsi', true)),
                'kota' => htmlspecialchars($this->input->post('Kota', true)),
                'kecamatan' => htmlspecialchars($this->input->post('Kecamatan', true)),
                'kelurahan' => htmlspecialchars($this->input->post('Kelurahan', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'tgllahir' => htmlspecialchars($this->input->post('tgllahir', true)),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'Berhasil Terdaftar');
            redirect('Auth/index');
        }
    }

    public function regislog()
    {

        $data['judul'] = 'Create Your Account';
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Auth/regislog');
        $this->load->view('TemplateAdmin/Footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('password');


        redirect('Home/index');
    }
}
