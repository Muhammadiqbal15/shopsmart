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
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('Admin/index');
                    } else {
                        $this->session->set_flashdata('login', $user['nama']);
                        redirect('Home/index');
                    }
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
            $email = $this->input->post('email', true);

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'foto' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'notelp' => htmlspecialchars($this->input->post('nomortlp', true)),
                'provinsi' => htmlspecialchars($this->input->post('Provinsi', true)),
                'kota' => htmlspecialchars($this->input->post('Kota', true)),
                'kecamatan' => htmlspecialchars($this->input->post('Kecamatan', true)),
                'kelurahan' => htmlspecialchars($this->input->post('Kelurahan', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode( random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendemail($token, 'verify');
            $this->session->set_flashdata('message', 'Berhasil Terdaftar! Tolong Aktifasi Akun Email Mu');
            redirect('Auth/index');
        }
    }

    private function _sendemail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'shopsmartetoko15@gmail.com',
            'smtp_pass' => '$12345678$',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8', 
            'newline'   => "\r\n"
        ];

        $this->load->library('email',$config);
        $this->email->initialize($config);

        $this->email->from('shopsmartetoko15@gmail.com','AdminShopsmart'); 
        $this->email->to($this->input->post('email', true));

        if($type == 'verify'){
            $this->email->subject('Akun Verifikasi');
            $this->email->message('Klik link ini untuk verifikasi akunmu : <a href="'.base_url().'auth/verify?email=' . $this->input->post('email') . '&token=' . $token .'">Aktifasi</a>');
        }
        

        if($this->email->send()){
            return true;
        }else{
            echo $this->email->print_debugger();
            die;
        }
    }


    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();


        if($user){

            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token)
            {

                if(time()  - $user_token['date_created'] < (60*60*24))
                {
                    $this->db->set('is_active', 1); 
                    $this->db->where('email',$email);
                    $this->db->update('user');

                    $this->db->delete('user_token',['email' => $email]);

                    $this->session->set_flashdata('eroremail','<div class="alert alert-success" role="alert">
                    '.$email.' sudah aktif! Tolong Masuk Ke Akun Mu
                    </div>');
                    redirect('Auth/index');
                }else{

                    $this->db->delete('user',['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('eroremail','<div class="alert alert-danger" role="alert">
                    Aktifasi Akun Gagal! Token Expired/Kadaluarsa.
                    </div>');
                    redirect('Auth/index');
                }

            }else{

                $this->session->set_flashdata('eroremail','<div class="alert alert-danger" role="alert">
                Aktifasi Akun Gagal! Token Salah.
                </div>');
                redirect('Auth/index');
            }

        }else{

            $this->session->set_flashdata('eroremail','<div class="alert alert-danger" role="alert">
            Aktifasi Akun Gagal! Email Salah.
            </div>');
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
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('logout', 'Berhasil Logout');
        redirect('Home/index');
    }

    public function blok()
    {
        $data['judul'] = "Page Not Found";
        $this->load->view('TemplateAuth/HeaderAuth', $data);
        $this->load->view('Auth/blok');
        $this->load->view('TemplateAuth/FooterAuth');
    }
}
