<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "Product";

    public $product_id;
    public $name;
    public $price;
    public $description;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}
