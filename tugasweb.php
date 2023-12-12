<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $koneksi = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$koneksi) {
        die("gagal buwok : <br> " . mysqli_connect_error());
    } else {
        echo "yippi!<br>\n";
    }

    // Create database
    $sql1 = "CREATE DATABASE IF NOT EXISTS udin";
    if (mysqli_query($koneksi, $sql1)) {
        echo "yippi create db!<br>";
    } else {
        echo "bowok  gagal <br>: " . mysqli_error($koneksi) . "<br>";
    }

    mysqli_close($koneksi);

    $database = "udin";
    $koneksi = mysqli_connect($servername, $username, $password, $database);

    // cek koneksi
    if (!$koneksi) {
        die("gagal buwok : <br> " . mysqli_connect_error());
    } else {
        echo "yippi!<br>\n";
    }

    // Create table
    $sql2 = "CREATE TABLE IF NOT EXISTS profile (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )";

    if (mysqli_query($koneksi, $sql2)) {
        echo "Yippi create table!<br>";
    } else {
        echo "bowok gagal: " . mysqli_error($koneksi) . "<br>";
    }

    // Insert Table
    $sql3 = "INSERT INTO profile (nama, email) VALUES ('bjh', 'nkj123@gmail.com')";

    if (mysqli_query($koneksi, $sql3)) {
        $last_id = mysqli_insert_id($koneksi);
        echo "Yippi insert: " . $last_id . "<br>";
    } else {
        echo "buwok gagal: " . $sql3 . "<br>" . mysqli_error($koneksi) . "<br>";
    }

    // Update table
    $sql4 = "UPDATE profile SET nama = 'nkj' WHERE nama = 'bjh'";
    if (mysqli_query($koneksi, $sql4)) {
        echo "yippi update table!<br>";
    } else {
        echo "buwok gagal: " . mysqli_error($koneksi) . "<br>";
    }

    mysqli_close($koneksi);
    ?>

</head>
<body>
        
</body>
</html>