<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Laravel di Duniailkom</title>
</head>
<body>
<h1>Daftar Mahasiswa Kampus Teknik Informatika</h1>
  <ol>
    {{-- <li><?php //echo $mahasiswa01 ?></li>
    <li><?php //echo $mahasiswa05 ?></li>
    <li><?php //echo $mahasiswa03 ?></li>
    <li><?php //echo $mahasiswa04 ?></li>
    <li><?php //echo $mahasiswa02 ?></li> --}}
    <?php
        foreach ($mahasiswa as $nama) {
            echo "<li>$nama</li>";
        }
    ?>
  </ol>
</body>
</html>