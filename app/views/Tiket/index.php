<div class="container mt-3">
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
                    <?php foreach ($data['pemesanan'] as $table ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $table['namaLengkap'] ?>
                         <a href="<?= BASEURL; ?>/Tiket/detail/<?= $table['id']; ?>" class="badge text-bg-primary "> detail</a>
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
        <form action="<?= BASEURL; ?>/Tiket/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nomor_identitas">Nomor identitas</label>
            <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="no_hp">no Hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp">
          </div>

          <div class="form-group">
            <label for="kelasPenumpang">kelas Penumpang</label>
            <select class="form-control" id="kelasPenumpang" name="kelasPenumpang">
              <option value="Ekonomi">Ekonomi</option>
              <option value="Bisnis">Bisnis</option>
              <option value="eksekutif">eksekutif</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jadwal_keberangkatan">jadwal berangkat</label>
            <input type="date" class="form-control" id="jadwal_keberangkatan" name="jadwal_keberangkatan" >
          </div>
          <div class="form-group">
            <label for="jumlah_penumpang">jumlah penumpang</label>
            <input type="text" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang">
          </div>
          <div class="form-group">
            <label for="jumlah_lansia">jumlah penumpang lansia</label>
            <input type="text" class="form-control" id="jumlah_lansia" name="jumlah_lansia">
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Beli Tiket</button>
        </form> 
      </div>
    </div>
  </div>
</div>