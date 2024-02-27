<?php 

class Tiket_model {

    // pemesanan adalah table dari database
    private $table='pemesanan';
    private $db;
    // database
    
    public function __construct(){
        $this->db = new Database(); 
    }
    // datanbase handler
    // private $dbh; 
    // // statement untuk menyimpan Query
    // private $stmt;

    // ambil semua data tiket 
    public function getALLTiket(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    // ambil data tiket berdasarkan id
    public function getTiketByID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }
    // methode tambah tiket dalam database
    public function tambahTiketSaya($data){
        $query = "INSERT INTO pemesanan
                    VALUES
                    ('', :namaLengkap, :nomor_identitas, :no_hp, :kelasPenumpang, :jadwal_keberangkatan, :jumlah_penumpang, :jumlah_lansia, :Total_harga)";
        $this->db->query($query);
        $this->db->bind('namaLengkap', $data['namaLengkap']);
        $this->db->bind('nomor_identitas', $data['nomor_identitas']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('kelasPenumpang', $data['kelasPenumpang']);
        $this->db->bind('jadwal_keberangkatan', $data['jadwal_keberangkatan']);
        $this->db->bind('jumlah_penumpang', $data['jumlah_penumpang']);
        $this->db->bind('jumlah_lansia', $data['jumlah_lansia']);
        $this->db->bind('Total_harga', $data['Total_harga']);

       
        $this->db->execute();
        return $this->db->rowCount();
    }
        // methode hapus tiket dalam database
        public function HapusTiketSaya($id){
            $query = "DELETE FROM pemesanan WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

