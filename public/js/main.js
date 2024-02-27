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