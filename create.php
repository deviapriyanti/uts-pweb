<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h3>Tambah Produk</h3>
    <div class="ms-2 me-2">
        <a type="button" class="btn btn-outline-dark" href="show.php">Lihat data produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="input nama produk">
            <input type="number" name="price" placeholder="input harga produk">
            <input type="file" name="image" >
            <input type="submit" value="simpan" name="submit">
        </form>
    </div>
</body>
</html>