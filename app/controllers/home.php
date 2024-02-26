<?php 

class home extends Controller{
    public function index(){
        $data['judul'] = 'Author';
        $data['nama']=$this->model('User_model')->getUser();
        $this->view('template/header',$data);
        $this->view('home/index',$data);
        $this->view('template/footer');
    }
    public function about(){
        $data['judul']= 'About me';
        $this->view('template/header',$data);
        $this->view('home/about');
        $this->view('template/footer');
    }
}



?>