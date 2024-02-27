<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <!-- jalankan funngsi flash dari clas flasher -->
      <?php Flasher::flash();?>
    </div>
  </div>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Beli Tiket Sekarang
            </button>
            <br>
            <br>
            <h3>Daftar Tiket</h3>
            <br>
            <ul>
                <div class="row">
                <div class="col-12">
                 <<ul class="list-group"> 
                    <li class="list-group-item disabled" aria-disabled="true">Daftar Pesan tiket</li>
                    <!-- ambil array data -->
                    <?php foreach ($data['pemesanan'] as $table ) : ?>
                    <li class="list-group-item ">
                    Dipesan Oleh : <?= $table['namaLengkap'] ?>
                    <a onclick="return confirm('apakah anda yakin?')" href="<?= BASEURL; ?>/Tiket/hapus/<?= $table['id']; ?>" class="badge text-bg-danger float-end ms-1 "> hapus</a>
                    <a href="<?= BASEURL; ?>/Tiket/detail/<?= $table['id']; ?>" class="badge text-bg-primary float-end ms-1"> detail</a>
                    </li>
                    <?php endforeach;?>
                </ul>
                </div>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Beli Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
        <!-- Start Form Input data -->
        <form action="<?= BASEURL; ?>/Tiket/tambah" method="post">
    <input type="hidden" name="id" id="id">
    <div class="form-group">
        <label for="namaLengkap">Nama Lengkap</label>
        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label for="nomor_identitas">Nomor identitas</label>
        <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label for="no_hp">no Hp</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp" required>
    </div>

    <div class="form-group">
        <label for="kelasPenumpang">kelas Penumpang</label>
        <select class="form-control" id="kelasPenumpang" name="kelasPenumpang">
            <option value="Ekonomi">Ekonomi</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Eksekutif">Eksekutif</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jadwal_keberangkatan">jadwal berangkat</label>
        <input type="date" class="form-control" id="jadwal_keberangkatan" name="jadwal_keberangkatan" required>
    </div>
    <div class="form-group">
        <label for="jumlah_penumpang">jumlah penumpang</label><br>
        <small>bukan lansia 60 <</small>
        <input type="number" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" required>
    </div>
    <div class="form-group">
        <label for="jumlah_lansia">jumlah penumpang lansia</label>
        <input type="number" class="form-control" id="jumlah_lansia" name="jumlah_lansia" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="20000" readonly disabled>
    </div>
    <div class="form-group">
        <label for="Total_harga">Total Harga</label>
        <input type="text" class="form-control " id="Total_harga" name="Total_harga" readonly >
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="hitung()">Hitung</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Beli Tiket</button>
    </div>
</form>

<script>
    function hitung() {
        let kelasPenumpang = document.getElementById('kelasPenumpang').value;
        let jumlahPenumpang = parseInt(document.getElementById('jumlah_penumpang').value);
        let jumlahLansia = parseInt(document.getElementById('jumlah_lansia').value);

        let hargaPerOrang;
        if (kelasPenumpang === 'Ekonomi') {
            hargaPerOrang = 20000;
        } else if (kelasPenumpang === 'Bisnis') {
            hargaPerOrang = 25000;
        } else if (kelasPenumpang === 'Eksekutif') {
            hargaPerOrang = 30000;
        }

        let totalHarga = hargaPerOrang * jumlahPenumpang;

        // Menghitung potongan harga untuk penumpang lansia
        let potonganHarga = 0;
        if (jumlahLansia > 0) {
            potonganHarga = 0.1 * totalHarga;
        }

        totalHarga -= potonganHarga;

        // Memasukkan total harga ke dalam input field
        document.getElementById('Total_harga').value = totalHarga;
    }
</script>

        <!-- endForm input data -->
      </div>
    </div>
  </div>
</div>