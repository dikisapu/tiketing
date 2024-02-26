<?php 
// var_dump($_POST);   
class Tiket extends controller{

    public function index(){
        $data['judul']='Junior Web Developer';
        $data['pemesanan'] = $this->model('Tiket_model')->getAllTiket();
        $this->view('template/header',$data);
        $this->view('Tiket/index',$data);
        $this->view('template/footer');
    }
    public function detail($id){
        $data['judul']='Detail Tiket saya';
        $data['pemesanan'] = $this->model('Tiket_model')->getTiketByID($id);
        $this->view('template/header',$data);
        $this->view('Tiket/detail',$data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if( $this->model('Tiket_model')->tambahTiketSaya($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'di Checkout', 'success');
            header('Location: ' . BASEURL . '/Tiket');
            exit;
        }else{
            Flasher::setFlash('gagal', 'di Checkout', 'danger');
            header('Location: ' . BASEURL . '/Tiket');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Tiket_model')->HapusTiketSaya($id) > 0 ) {
            Flasher::setFlash('berhasil', 'di Hapus', 'success');
            header('Location: ' . BASEURL . '/Tiket');
            exit;
        }else{
            Flasher::setFlash('gagal', 'di Gagal', 'danger');
            header('Location: ' . BASEURL . '/Tiket');
            exit;
        }
    }
}
