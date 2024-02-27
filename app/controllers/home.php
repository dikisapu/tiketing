<?php 

class home extends Controller{

    // method index untuk menampilkan dhalaman awal
    public function index(){
        $data['judul'] = 'Author';
        $data['nama']=$this->model('User_model')->getUser();
        $this->view('template/header',$data);
        $this->view('home/index',$data);
        $this->view('template/footer');
    }
}
