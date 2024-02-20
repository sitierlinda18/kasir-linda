<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
</head>
<form action="produk.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<body>
    <header>
        <h3>Produk Ready</h3>
    </header>
    
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ProdukID</th>
            <th>NamaProduk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($conn, $sql);

        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['ProdukID']."</td>";
            echo "<td>".$barang['NamaProduk']."</td>";
            echo "<td>".$barang['Harga']."</td>";
            echo "<td>".$barang['Stok']."</td>";
            
            

            echo "<td>";
            echo "<a href='edit-produk.php?id=".$barang['ProdukID']."'>Edit</a> | ";
            echo "<a href='hapus-produk.php?id=".$barang['ProdukID']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>