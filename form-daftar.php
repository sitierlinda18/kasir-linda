<!DOCTYPE html>
<html>
<head>
    <title>Form Produk Baru</title>
</head>

<body>
    <header>
        <h3>List Data Produk</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="ProdukID">ProdukID: </label>
            <input type="text" name="ProdukID" placeholder="ProdukID" />
        </p>
        <p>
            <label for="NamaProduk">NamaProduk: </label>
            <textarea name="NamaProduk"></textarea>
        </p>
        <p>
            <label for="Harga">Harga: </label>
            <input type="text" name="Harga" placeholder="Harga" />
        </p>
        <p>
            <label for="Stok">Stok: </label>
            <input type="Stok" name="Stok" placeholder="Stok" />
        </p>
        <p>

        
            <input type="submit" value="Submit" name="Submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>