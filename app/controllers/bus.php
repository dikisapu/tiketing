<?php 
class Bus extends controller{

    public function index(){
        $data['judul']='Junior Web Developer';
        $data['pemesanan'] = $this->model('Bus_model')->getAllBus();
        $this->view('template/header',$data);
        $this->view('bus/index',$data);
        $this->view('template/footer');
    }
    public function detail($id){
        $data['judul']='Daftar Bus Saya';
        $data['namaLengkap'] = $this->model('Bus_model')->getBusByID($id);
        $this->view('template/header',$data);
        $this->view('bus/detail',$data);
        $this->view('template/footer');
    }
}