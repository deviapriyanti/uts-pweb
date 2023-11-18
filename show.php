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
    <div class="container">
    <h3>Data produk</h3>
    <div class="d-flex justify-content-end align-items-start mb-3">
        <a  type="button" class="btn btn-outline-dark" href="create.php">CREATE</a>
    </div>
    <table class="table table-light table-striped-columns">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Harga</th>
                <th style="text-align: center;">Gambar produk</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <td style="text-align: center"><a href="<?=$row['image'];?>" target="_blank">unduh</a></td>
                    <td style="text-align: center;">
                        <a type="button" class="btn btn-outline-secondary" href="edit.php?id=<?=$row['id'];?>">Edit</a>
                        <a type="button" class="btn btn-outline-danger" href="./backend/hapus.php?id=<?=$row['id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>