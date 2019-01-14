<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{
    private $_table = "Karyawan";

    public $karyawan_id;
    public $name;
    public $addres;
    public $no_telpon;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}
