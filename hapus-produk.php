<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $barang = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM Produk WHERE ProdukID=$barang";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: produk.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>