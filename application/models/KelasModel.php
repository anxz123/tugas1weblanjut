<?php


defined('BASEPATH') or exit('No direct script access allowed');

class KelasModel extends CI_Model
{
    private $table = 'tabel_2001050005';


    public function getdb()
    {
        return $this->db->get($this->table)->result();
    }
    public function add($data_input)
    {
        $this->db->insert($this->table,$data_input);
    }
}