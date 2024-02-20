<html>
<head>
    <title>Penjualan</title>
</head>
<body>
    <h2>Penjualan</h2>
    <h4>Penjualan_kasir</h4>
    <p><a href="form-input.php">+ Tambah Data</a></p>
    <table border="1" cellpadding="2">
        <thead>
            <tr>            
                <th>PenjualanID</th>
                <th>TanggalPenjualan</th>
                <th>TotalHarga</th>
        
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $data   =mysqli_query($conn, "SELECT * FROM penjualan ORDER BY PenjualanID DESC");
                $no=0;
                while($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>            
                <td><?php echo $no?></td>
                <td><?php echo $data['nis']?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['jurusan']?></td>
                <td><?php echo $data['telp']?></td>
                <td><?php echo $data['alamat']?></td>
                <td><a href="form-edit.php?id_siswa=<?=$data['id_siswa']?>">Edit</a> | <a href="hapus.php?id_siswa=<?=$data['id_siswa']?>" onclick="return confirm('Are you sure you want to delete == <?php echo $data['nama']?> == from Database?');">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>