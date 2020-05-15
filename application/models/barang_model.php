<?php


class barang_model extends CI_Model
{

    public function getAllBarang()
    {
        $id = $this->input->post('user');
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->where('user' ,);
        // $query = $this->db->get();
        // return $query->result_array();

        // return $this->db->get_where('barang', ['user' => $id])->result_array();

        // return $this->db->query("SELECT barang. * from user,barang WHERE user.id = barang.user AND user.id=8")->result_array();
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('user', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db->get('barang')->result_array();
    }

    public function getallbrgforadmin()
    {
        $this->db->join('user', 'user.id = barang.user');
        return $this->db->get('barang')->result_array();
    }

    public function getallpembeliforadmin()
    {
        $this->db->join('user', 'user.id = pembeli.usr_penjual');
        return $this->db->get('pembeli')->result_array();
    }



    public function tambahpmbyrn($data)
    {
        $this->db->update('user', $data);
    }

    public function tambah($data)
    {
        $this->db->insert('barang', $data);
    }

    public function hapusbarang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('barang');
    }

    public function hapuspembeli($id_pembeli)
    {
        $this->db->where('id_pembeli', $id_pembeli);
        $this->db->delete('pembeli');
    }

    public function getbyid($kondisi)
    {
        $this->db->from('barang');
        $this->db->join('user', 'user.id = barang.user');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function updatebarang($data, $kondisi)
    {
        $this->db->update('barang', $data, $kondisi);
    }

    public function laptop($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Laptop');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countlaptop()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Laptop');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function mouse($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Mouse');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countmouse()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Mouse');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function keyboard($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Keyboard');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countkeyboard()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Keyboard');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function mousepad($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Mousepad');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countmousepad()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Mousepad');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function smartphone($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'SmartPhone');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countsmartphone()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'SmartPhone');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function headset($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Headset&Earphone');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function countheadset()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('jenis_barang', 'Headset&Earphone');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function pembeli($data)
    {
        $this->db->insert('pembeli', $data);
    }

    public function getPembeli()
    {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->where('usr_penjual', $this->session->userdata('id'));
        $this->db->order_by('id_pembeli', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function caribarang1()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        return  $this->db->get('barang')->result_array();
    }


    public function getjoin($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getbarang($limit, $start)
    {
        return $this->db->get('barang', $limit, $start)->result_array();
    }

    public function countallbarang()
    {
        return $this->db->get('barang')->num_rows();
    }

    public function countallpembeli()
    {
        return $this->db->get('pembeli')->num_rows();
    }

    public function getuserbyid($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateuser($data, $kondisi)
    {
        $this->db->update('user', $data, $kondisi);
    }

    public function getalluser()
    {
        return $this->db->get('user')->result_array();
    }

    public function fortoko($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('user', 'user.id = barang.user');
        $this->db->where('user', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function find($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)
            ->limit(1)
            ->get('barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function tampilkeranjang($rowid)
    {
        return $this->cart->get_item($rowid);
    }

    public function userbyid($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
