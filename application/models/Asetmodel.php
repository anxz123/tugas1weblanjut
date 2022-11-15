<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Asetmodel extends CI_Model
{
    private $table = 'tbl_aset';


    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}