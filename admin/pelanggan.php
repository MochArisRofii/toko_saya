<h2>Data Pelanggan</h2><b>TOKO SAYA</b>
<hr>
<form method="post">
    <div class="form-group form-inline">
        <input type="text" class="form-control mr-2" name="cari" placeholder="Ketik nama pelanggan..." />
        <button class="btn btn-success" name="tombol_cari">Cari</button>
        <a href="cetakpelanggan.php" class="btn btn-warning ml-2" target="_blank">Cetak</a>
    </div>
</form>
<table class="table table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        include 'inc/koneksi.php';
        if (isset($_POST['tombol_cari'])) {
            $input = $_POST['cari'];
            if ($input != "") {
                $sql = mysqli_query($config, "SELECT * FROM pelanggan WHERE nama_pelanggan like '%$input%'");
            } else {
                $sql = mysqli_query($config, "SELECT * FROM pelanggan");
            }
        } else {
            $sql = mysqli_query($config, "SELECT * FROM pelanggan");
        }
        $jumlahrecord = mysqli_num_rows($sql);
        if ($jumlahrecord < 1) {
            echo "<tr>";
            echo "<td colspan='8'><center class='bg-danger text-white'>Data Tidak Ditemukan</center></td>";
            echo "</tr>";
            echo "<meta http-equiv='refresh' content='2;url=index.php?page=pelanggan'>";
        } else {
            $nomor =1;
            while ($data = mysqli_fetch_array($sql)) {
        ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td>
                        <a href="index.php?page=hapuspelanggan&id=<?php echo $data['id_pelanggan']; ?>"
                        onclick="return confirm('Apakah Data Dihapus??')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        <?php
                $nomor++;    
            }
        }
        ?>
    </tbody>
</table>