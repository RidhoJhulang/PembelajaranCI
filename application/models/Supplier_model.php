<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "Supplier";

    public $supplier_id;
    public $name;
    public $addres;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}
