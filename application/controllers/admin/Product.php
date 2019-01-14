<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
    }
    public function index()
    {
        $data["Product"] = $this->Product_model->getAll();
        $this->load->view("admin/product/list", $data);
    }
}