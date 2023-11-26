<h2>Form Ubah Ongkir & Tarif</h2>
<hr>
<?php
    include 'inc/koneksi.php';
    $id = mysqli_query($config, "select * from ongkir where id_ongkir='$_GET[id]'");
    $data = mysqli_fetch_assoc($id);
?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" class="form-control" name="nk" value="<?php echo $data['nama_kota'] ?>">
    </div>
    <div class="form-group">
        <label>Tarif</label>
        <input type="number" class="form-control" name="tr" value="<?php echo $data['tarif'] ?>">
    </div>
    <button class="btn btn-primary w-100" name="ubahongkir">UBAH PRODUK</button>
</form>
<?php

if(isset($_POST['ubahongkir'])) {
    $namakota=$_POST['nk'];
    $tarif=$_POST['tr'];

    
    $sql = mysqli_query($config, "update ongkir set nama_kota='$namakota',tarif='$tarif' WHERE id_ongkir='$_GET[id]'");

    echo "<script>alert('Data Ongkir Berhasil Di Ubah!');</script>";
    echo "<script>location='index.php?page=ongkir';</script>";
}
?>