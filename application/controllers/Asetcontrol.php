<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Asetcontrol extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asetmodel');
    }


    public function index()
    {
        $data['isi'] = $this->Asetmodel->getAll();
        $this->load->view('Asetview', $data);
    }
}