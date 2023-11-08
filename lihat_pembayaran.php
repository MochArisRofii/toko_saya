<?php
$id_pembelian = $_GET["id"];

$ambil_data_pembelian = mysqli_query($config, "SELECT * FROM pembayaran
LEFT JOIN pembelian ON pembelian.id_pembelian=pembayaran.id_pembelian
WHERE pembelian.id_pembelian='$id_pembelian'");
$detil_pembayaran = mysqli_fetch_assoc($ambil_data_pembelian);

if (empty($detil_pembayaran)) {
    echo "<script>alert('Belum Ada data pembayaran');</script>";
    echo "<script>location='index.php?page=riwayat';</script>";
    exit();
}

if ($_SESSION['pelanggan']['id_pelanggan'] !== $detil_pembayaran['id_pelanggan']) {
    echo "<script>alert('Anda tidak berhak melihat pembayaran orang lain!');<script>";
    echo "<script>location='index.php?page=riwayat';</script>";
    exit();
}
?>
<div class="container mt-5 mb-5">
    <h3>Lihat Pembayaran</h3>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <td><?php echo $detil_pembayaran['nama_pembayar']; ?></td>
                </tr>
                <tr>
                    <th>Bank</th>
                    <td><?php echo $detil_pembayaran['bank']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detil_pembayaran['tanggal']; ?></td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td><?php echo number_format($detil_pembayaran['jumlah'], 0, ",", "."); ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <img src="images/bukti_pembayaran/<?php echo $detil_pembayaran['bukti'] ?>" alt=""
            class="img-responsive">
        </div>
    </div>
</div>