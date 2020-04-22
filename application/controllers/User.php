<?php

defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
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
}
