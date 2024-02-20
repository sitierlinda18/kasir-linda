<!DOCTYPE html>
<html>
<head>
 <title>Kasir</title>
</head>
<body>
 
 <h2>Produk</h2>
 <br/>
 <a href="index.php">KEMBALI</a>
 <br/>
 <br/>
 <h3>EDIT DATA MAHASISWA</h3>
 
 <?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: produk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM Produk WHERE ProdukID=$id";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
 <form method="post" action="update.php">
 <table>
 <tr> 
 <td>ProdukID</td>
 <td>
 <input type="hidden" name="ProdukID" value="<?php echo $barang['ProdukID']; ?>">
 <input type="text" name="NamaProduk" value="<?php echo $barang['NamaProduk']; ?>">
 </td>
 </tr>
 <tr>
 <td>Harga</td>
 <td><input type="text" name="Harga" value="<?php echo $barang['Harga']; ?>"></td>
 </tr>
 <tr>
 <td>Stok</td>
 <td><input type="text" name="Stok" value="<?php echo $barang['Stok']; ?>"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr> 
 </table>
 </form>
 <?php 
 
 ?>
 
</body>
</html>