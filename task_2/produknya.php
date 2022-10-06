<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gaya.css">
    <title>Tampilkan Daftar Produk</title>
</head>
<body>
    <h3>Tampilkan daftar produk</h3>

    <div class="Sepatu">

        <div class="produk">
            <form action="detail-produk.php" method="get">
                <p>adidas</p>
                <img src="adidas.png">
                <input type="hidden" name="id_produk" value="1">
                <input type="hidden" name="deskripsi" value="ini adidas">
                <input type="submit" value="detail">
            </form>
        </div>

        <div class="produk">
            <form action="detail-produk.php" method="get">
                <p>nike</p>
                <img src="nike.png">
                <input type="hidden" name="id_produk" value="2">
                <input type="hidden" name="deskripsi" value="ini nike">
                <input type="submit" value="detail">
            </form>
        </div>

    </div>
</body>
</html>