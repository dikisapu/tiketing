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
    public function tambahBusSaya($data){
        $query = "INSERT INTO pemesanan
                    VALUES
                    ('', :namaLengkap, :nomor_identitas, :no_hp, :kelasPenumpang, :jadwal_keberangkatan, :jumlah_penumpang, :jumlah_lansia)";
        $this->db->query($query);
        $this->db->bind('namaLengkap', $data['namaLengkap']);
        $this->db->bind('nomor_identitas', $data['nomor_identitas']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('kelasPenumpang', $data['kelasPenumpang']);
        $this->db->bind('jadwal_keberangkatan', $data['jadwal_keberangkatan']);
        $this->db->bind('jumlah_penumpang', $data['jumlah_penumpang']);
        $this->db->bind('jumlah_lansia', $data['jumlah_lansia']);

        var_dump('Jumlah_lansia', $data['jumlah_lansia']);
        $this->db->execute();
        return $this->db->rowCount();
    }
   
        
    }

