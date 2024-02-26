<?php 

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flash(){
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
            Tiket Bus <strong>'.$_SESSION['flash']['pesan'].' '.$_SESSION['flash']['aksi'].'</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['flash']);
        }
    }
}