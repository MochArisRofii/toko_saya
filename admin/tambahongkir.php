<h2>From Tambah Ongkir & Tarif</h2>
<hr>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" class="form-control" name="nk">
    </div>
    <div class="form-group">
        <label>Tarif (Rp)</label>
        <input type="number" class="form-control" name="tr">
    </div>
    <button class="btn btn-primary w-100" name="tambah">TAMBAH PRODUK</button>
</form>
<?php
include 'inc/koneksi.php';
if(isset($_POST['tambah'])) {
    $namaproduk=$_POST['nk'];
    $hargaproduk=$_POST['tr'];

    $sql = mysqli_query($config, "INSERT INTO ongkir(id_ongkir,nama_kota,
    tarif) VALUES ('','$namakota','$tarif')");

    echo "<script>alert('Produk Berhasil Di Tambahkan');</script>";
    echo "<script>location='index.php?page=ongkir';</script>";
}
?>