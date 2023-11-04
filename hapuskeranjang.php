<?php
    $idproduk = $_GET['id'];
    unset($_SESSION['keranjang'][$idproduk]);

    echo "<script>alert('Produk berhasil diHapus!');</script>";
    echo "<script>location='index.php?page=keranjang';</script>";
?>