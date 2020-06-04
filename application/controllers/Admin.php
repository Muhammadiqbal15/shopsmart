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

    public function userblock()
    {

        $data['judul'] = 'User Terblock';
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Userblock', $data);
        $this->load->view('TemplateAdmin/Footer');
    }


    public function sumuser()
    {
        $this->db->select('*');
        $this->db->from('user');
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
}
