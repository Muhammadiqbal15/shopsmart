<?php



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
        $config['total_rows'] = $this->barang_model->countallbarang();
        $config['per_page'] = 10;

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
        $data['Barang'] = $this->barang_model->getbarang($config['per_page'], $data['start']);
        $data['user'] = $this->barang_model->getalluser();
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
        $data['barang'] = $this->barang_model->getAllBarang();
        $data['user1'] = $this->barang_model->getuserbyid($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateUser/HeaderUser', $data);
        $this->load->view('User/index', $data);
        $this->load->view('TemplateUser/FooterUser');
    }

    public function barangjualuser()
    {
        $data['judul'] = 'Dashboard';

        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/barangygdijual');
        $this->load->view('TemplateAdmin/Footer');
    }
}
