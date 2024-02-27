<?php 

class Bus_model {

    private $table='pemesanan';
    private $db;
    
    
    public function __construct(){
        $this->db = new Database(); 
    }
    // datanbase handler
    // private $dbh; 
    // // statement untuk menyimpan Query
    // private $stmt;

    public function getALLBus(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getBusByID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

   
        
    }

