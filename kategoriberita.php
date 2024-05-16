<?php 
include 'koneksiberita.php';

if(isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];

    $sql = "SELECT b.judul, b.isi
            FROM berita b 
            INNER JOIN kategori k ON b.id_kategori = k.id
            WHERE k.nama = '$kategori'";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita <?php echo $kategori ?></title>
</head>
<body>
    <h1>Berita <?php echo $kategori ?></h1>
    <?php 
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($result) > 0) {
    ?>
    
        <?php
        $nomor = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $nomor++;
        ?>

        <h3><?php echo $row['judul']; ?></h3>
        <p><?php echo $row['isi']; ?></p>
        <hr>

        <?php
        }
        ?>
    <?php
    } else {
        echo "Belum ada berita pada kategori ini.";
    }
    ?>
</body>
</html>