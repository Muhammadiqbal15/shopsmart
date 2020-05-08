<?php


class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/index';
        $config['total_rows'] = $this->barang_model->countallbarang();
        $config['per_page'] = 6;

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
        if ($this->input->post('keyword')) {
            $data['Barang'] = $this->barang_model->caribarang1();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function beli($id_barang, $rowid)
    {

        if (!$this->session->userdata('email')) {
            redirect(base_url("Auth/regislog"));
        }
        $data['judul'] = 'Beli';
        $kondisi = array('id_barang' => $id_barang);
        $data['datakrnjng'] = $this->barang_model->tampilkeranjang($rowid);
        $data['barang'] = $this->barang_model->getbyid($kondisi);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Beli', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detail($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Detail', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detailmouse($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailMouse', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detailkeyboard($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailKeyboard', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detaillaptop($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailLaptop', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detailmousepad($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailMousepad', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function detailsmartphone($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailSmartphone', $data);
        $this->load->view('TemplateHome/Footer');
    }


    public function detailheadset($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'Detail';
        $data['barang'] = $this->barang_model->getbyid($kondisi);

        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/DetailHeadset', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Laptop()
    {

        $data['judul'] = 'Laptop';

        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Laptop';
        $config['total_rows'] = $this->barang_model->countlaptop();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->laptop($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Laptop', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Mouse()
    {
        $data['judul'] = 'Mouse';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Mouse';
        $config['total_rows'] = $this->barang_model->countmouse();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->mouse($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Mouse', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Keyboard()
    {
        $data['judul'] = 'Keyboard';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Keyboard';
        $config['total_rows'] = $this->barang_model->countkeyboard();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->keyboard($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Keyboard', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Mousepad()
    {
        $data['judul'] = 'Mousepad';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Mousepad';
        $config['total_rows'] = $this->barang_model->countmousepad();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->mousepad($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Mousepad', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Smartphone()
    {
        $data['judul'] = 'Smartphone';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Smartphone';
        $config['total_rows'] = $this->barang_model->countsmartphone();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->smartphone($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Smartphone', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function Headset()
    {
        $data['judul'] = 'Headset&Earphone';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Home/Headset';
        $config['total_rows'] = $this->barang_model->countheadset();
        $config['per_page'] = 3;

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
        $data['barang'] = $this->barang_model->headset($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['barang'] = $this->barang_model->caribarang2();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Headset', $data);
        $this->load->view('TemplateHome/Footer');
    }

    public function insertcart()
    {



        $nmbrg = htmlspecialchars($this->input->post('nmbrg', true));
        $hrgbrg = htmlspecialchars($this->input->post('hrgbrg', true));
        $pembeli = htmlspecialchars($this->input->post('nama', true));
        $nomortlp = htmlspecialchars($this->input->post('nomor', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $jml = htmlspecialchars($this->input->post('jumlah', true));
        $kirim = htmlspecialchars($this->input->post('pengiriman', true));
        $prov = htmlspecialchars($this->input->post('provinsi', true));
        $kot = htmlspecialchars($this->input->post('kota', true));
        $kec = htmlspecialchars($this->input->post('kecamatan', true));
        $kel = htmlspecialchars($this->input->post('kelurahan', true));
        $bayar = htmlspecialchars($this->input->post('pembayaran', true));
        $jmlfixedpembeli = htmlspecialchars($this->input->post('jumlahpembeli', true));
        $usr_penjual = htmlspecialchars($this->input->post('penjual', true));
        $tothrg = htmlspecialchars($this->input->post('totalhrg', true));

        $data = array(
            'nama'    => $pembeli,
            'noTelp'   => $nomortlp,
            'alamat' => $alamat,
            'nama_brg' => $nmbrg,
            'harga_brg' => $hrgbrg,
            'jumlah_brg' => $jml,
            'pengiriman' => $kirim,
            'jmlfixed_pembeli' => $jmlfixedpembeli,
            'provinsi' => $prov,
            'kota'  => $kot,
            'kecamatan' => $kec,
            'kelurahan' => $kel,
            'pembayaran' => $bayar,
            'usr_penjual' => $usr_penjual,
            'tot_hrg' => $tothrg
        );


        $this->barang_model->pembeli($data);
        $this->session->set_flashdata('flash', 'Barang');
        redirect('Home/sukses');
    }


    public function sukses()
    {
        $data['judul'] = 'Sukses';
        $this->load->view('TemplateHome/Header', $data);
        $this->load->view('Home/Sukses');
        $this->load->view('TemplateHome/Footer');
    }
}
