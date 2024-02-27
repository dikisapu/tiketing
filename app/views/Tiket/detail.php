<div class="container mt-5 mb-5">
  <div class="ro">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <!-- tampilkan gambar berdasarkan Kelas -->
      <img src="<?= BASEURL; ?>/img/<?= $data['pemesanan']['kelasPenumpang']; ?>.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Cetak Struk</h5>
    <p class="card-text">nama : <?= $data['pemesanan']['namaLengkap'];?></p>
    <p class="card-text" >nomor Identitas : <?= $data['pemesanan']['nomor_identitas'];?></p>
    <p class="card-text">No Hp : <?= $data['pemesanan']['No_hp'];?></p>
    <p class="card-text">Kelas Penumpang : <?= $data['pemesanan']['kelasPenumpang'];?></p>
    <p class="card-text">Jadwal keberengkatan : <?= $data['pemesanan']['jadwal_keberangkatan'];?></p>
    <p class="card-text">jumlah Penumpang  : <?= $data['pemesanan']['jumlah_penumpang'];?></p>
    <p class="card-text">jumlah Penumpang Lansia  : <?= $data['pemesanan']['jumlah_lansia'];?></p>
    <p class="card-text">total harga : <?= $data['pemesanan']['Total_harga'] ?> </p>
    <a href="#" class="btn btn-primary" onclick="window.print()">Cetak Struk</a>
    </div>
    </div>
  </div>
</div>

   
</div>
</div>