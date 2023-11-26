<h2>Form Ubah Slider</h2>
<hr>
<?php
    include 'inc/koneksi.php';
    $id = mysqli_query($config, "SELECT * FROM slider WHERE id_slider='$_GET[id]'");
    $data = mysqli_fetch_assoc($id);
?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Slider</label>
        <input type="text" class="form-control" name="nm" value="<?php echo $data['nama_slider'] ?>">
    </div>
    <div class="form-group">
        <label>Foto Slider</label>
        <img src="../images/slider/<?php echo $data['foto'] ?>" width="200">
        <input type="file" class="form-control mt-2" name="fto">
    </div>
    <button class="btn btn-primary w-100" name="ubahslider">UBAH Slider</button>
</form>
<?php

if(isset($_POST['ubahslider'])) {
    $namaslider=$_POST['nm'];

    $foto = $_FILES['fto']['name'];
    $lokasi = $_FILES['fto']['tmp_name'];
    

    if (!empty($lokasi)) {
        move_uploaded_file($lokasi, "../images/slider/" . $foto);
        $sql = mysqli_query($config, "UPDATE slider SET nama_slider='$namaslider',foto='$foto' WHERE id_slider='$_GET[id]'");
    } else {
        $sql = mysqli_query($config, "UPDATE slider set nama_slider='$namaslider' WHERE id_slider='$_GET[id]'");
    }

    echo "<script>alert('Foto slider Berhasil Di Ubah!');</script>";
    echo "<script>location='index.php?page=slider';</script>";
}
?>