<?php
    session_destroy();
    echo "<script>alert('Berhasil Logout!');</script>";
    echo "<script>location='/toko_saya/index.php?page=logout'<script>";
?>