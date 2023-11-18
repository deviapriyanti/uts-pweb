<?php

require './../config/db.php';

if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time().'-'.md5(rand()).'-'.$image;

    $uploadPath = $_SERVER['DOCUMENT_ROOT'].'/upload/'.$randomFilename;

    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }
    $uploadPath = $uploadDirectory . $randomFilename;

    if(move_uploaded_file($tempImage, $uploadPath)) {
        $imagePath = '/upload/' . $randomFilename;

        $insertQuery = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$imagePath')";

        if(mysqli_query($db_connect, $insertQuery)) {
            echo "Berhasil upload";
        } else {
            echo "Gagal melakukan query: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal upload file";
    }
}

?>
