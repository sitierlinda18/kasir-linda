<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
</head>

<body>
    <header>
        <h3>Produk Ready</h3>
    </header>
    
    <nav>
        <a href="form-penjualan.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>PenjualanID</th>
            <th>Tanggal</th>
            <th>DetailID</th>
            <th>ProdukID</th>
            <th>JumlahProduk</th>
            <th>SubTotal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM detail_penjualan";
        $query = mysqli_query($conn, $sql);

        while($jual = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$jual['PenjualanID']."</td>";
            echo "<td>".$jual['Tanggal']."</td>";
            echo "<td>".$jual['DetailID']."</td>";
            echo "<td>".$jual['JumlahProduk']."</td>";
            echo "<td>".$jual['SubTotal']."</td>";

            
        
            echo "<td>";
            echo "<a href='edit-produk.php?id=".$jual['ProdukID']."'>Edit</a> | ";
            echo "<a href='hapus-produk.php?id=".$jual['PenjualID']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>