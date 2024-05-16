<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Berita</h1>
    <form action="proses_inputberita.php" method="POST">
        Judul:
        <input type="text" name="judul" id="judul"><br/>
        Isi Berita:
        <textarea name="isian" id="isi" cols="50" rows="5"></textarea><br/>
        Kategori:
        <select id="kategori" name="kategori">
            <option value="1">Olahraga</option>
            <option value="2">Politik</option>
            
        </select><br/>
        <input type="submit" value="Simpan">
</body>
</html>