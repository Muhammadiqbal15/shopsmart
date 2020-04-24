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
        $data['sumBarang'] = $this->sumBarang();
        $data['sumPembeli'] = $this->sumPembeli();
        $data['sumbarangterjual'] = $this->sumbarangterjual();
        $data['jenisbrg'] = ['Laptop', 'Mouse', 'Keyboard', 'Mousepad', 'Smartphone', 'Headset&Earphone'];
        $data['keterangan'] = ['Ada', 'Kosong'];
        if ($this->input->post('keyword')) {
            $data['Barang'] = $this->barang_model->caribarang();
        }
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('TemplateAdmin/Footer');
    }



    public function Tambah()
    {
        $data['judul'] = 'TambahData';
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Tambah');
        $this->load->view('TemplateAdmin/Footer');
    }

    public function insertdata()
    {

        $this->form_validation->set_rules('namabrg', 'Nama Barang', 'required');
        $this->form_validation->set_rules('hargabrg', 'Harga Barang', 'required|numeric');
        $this->form_validation->set_rules('jml', 'Jumlah Barang', 'required|numeric');


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Dashboard';
            //load library
            $this->load->library('pagination');

            //config pagination
            $config['base_url'] = 'http://localhost/shopsmart/Admin/index';
            $config['total_rows'] = $this->barang_model->countallbarang();
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
            $data['Barang'] = $this->barang_model->getbarang($config['per_page'], $data['start']);
            $data['sumBarang'] = $this->sumBarang();
            $data['sumPembeli'] = $this->sumPembeli();
            $data['sumbarangterjual'] = $this->sumbarangterjual();
            if ($this->input->post('keyword')) {
                $data['Barang'] = $this->barang_model->caribarang();
            }
            $this->load->view('TemplateAdmin/Header', $data);
            $this->load->view('Admin/index', $data);
            $this->load->view('TemplateAdmin/Footer');
        } else {
            $nmbrg = htmlspecialchars($this->input->post('namabrg', true));
            $hrgbrg = htmlspecialchars($this->input->post('hargabrg', true));
            $jml = htmlspecialchars($this->input->post('jml', true));
            $uom = htmlspecialchars($this->input->post('uom', true));
            $jb = htmlspecialchars($this->input->post('jenis', true));
            $ket = htmlspecialchars($this->input->post('ket', true));
            $gambar = $_FILES['gambar'];
            if ($gambar == '') {
            } else {
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    die();
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(

                'nama_barang'       => $nmbrg,
                'harga_barang'      => $hrgbrg,
                'gambar'            => $gambar,
                'jenis_barang'      => $jb,
                'ket_barang'        => $ket,
                'jumlah'            => $jml,
                'UOM'               => $uom
            );

            $this->barang_model->tambah($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Admin/index');
        }
    }




    public function hapus($id_barang)
    {
        $this->barang_model->hapus($id_barang);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('Admin/index');
    }

    public function hapuspembeli($id_pembeli)
    {
        $this->barang_model->hapuspembeli($id_pembeli);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Admin/Pembeli');
    }


    public function ubah($id_barang)
    {
        $kondisi = array('id_barang' => $id_barang);
        $data['judul'] = 'UbahData';
        $data['barang'] = $this->barang_model->getbyid($kondisi);
        $data['jenisbarang'] = ['Laptop', 'Mouse', 'Keyboard', 'Mousepad', 'Smartphone', 'Headset&Earphone'];
        $data['keterangan'] = ['Ada', 'Kosong'];
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Ubah', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function updatedata()
    {


        $nmbrg = $this->input->post('namabrg', true);
        $hrgbrg = $this->input->post('hargabrg', true);
        $stok = $this->input->post('stok', true);
        $jb = $this->input->post('jenis', true);
        $ket = $this->input->post('ket', true);
        $uom = $this->input->post('uom', true);
        $gambar = $_FILES['gambar'];
        if ($gambar == '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|png|jfif|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'Gagal Upload';
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(

            'nama_barang'      => $nmbrg,
            'harga_barang'     => $hrgbrg,
            'gambar'           => $gambar,
            'jenis_barang'     => $jb,
            'ket_barang'       => $ket,
            'jumlah'           => $stok,
            'UOM'              => $uom
        );
        $path = './assets/img/';
        @unlink($path . $this->input->post('filelama'));
        $id_barang = $this->input->post('id_barang');

        $kondisi = $this->db->where('id_barang', $id_barang);
        $this->barang_model->update($data, $kondisi);
        $this->session->set_flashdata('flash', 'DiUbah');
        redirect('Admin/index');
    }

    public function Pembeli()
    {
        $data['judul'] = 'Data Pembeli';
        //load library
        $this->load->library('pagination');

        //config pagination
        $config['base_url'] = 'http://localhost/shopsmart/Admin/Pembeli';
        $config['total_rows'] = $this->barang_model->countallpembeli();
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
        $data['pembeli'] = $this->barang_model->getjoin($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['pembeli'] = $this->barang_model->caripembeli();
        }
        $data['sumBarang'] = $this->sumBarang();
        $data['sumPembeli'] = $this->sumPembeli();
        $data['sumbarangterjual'] = $this->sumbarangterjual();
        $this->load->view('TemplateAdmin/Header', $data);
        $this->load->view('Admin/Pembeli', $data);
        $this->load->view('TemplateAdmin/Footer');
    }

    public function sumBarang()
    {
        $total = 0;
        $this->db->select_sum('jumlah')->from('barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function sumPembeli()
    {
        $this->db->select_sum('jmlfixed_pembeli')->from('pembeli');
        $query = $this->db->get()->result();
        return $query;
    }

    public function sumbarangterjual()
    {
        $this->db->select_sum('jumlah_brg')->from('pembeli');
        $query = $this->db->get();
        return $query->result();
    }
}
