<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Product extends CI_Model {    

    public $sql;
    public $query;
    public $data;
    public $table = 'product';

    function __construct() {
        parent::__construct();
    }

    /**
     * _selectAll()
     * Selects all records in the table
     * @param: $table = Nome da tabela
     */
    public function _selectAll() {
        $this->sql = "SELECT T1.id, T1.title, T1.brand, T1.category, T1.description, T1.image, T2.name AS name_category FROM PRODUCT AS T1 INNER JOIN CATEGORY AS T2 WHERE T1.category = T2.id";
        $this->query = $this->db->query($this->sql);
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    }

    /**
     * _selectbyID()
     * Select by ID
     * @param int $id
     */
    public function _selectByID($id) {
        $this->db->select('*')->from("$this->table")->where('id', $id);
        $this->query = $this->db->get();
        if ($this->query->num_rows() > 0) :
            $this->data = $this->query->result();
            return $this->data;
        endif;
    } 
}
