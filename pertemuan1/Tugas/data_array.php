<?php
  $m_fruits = [
    ["id" => "1","nama" => "Pisang", "warna" => "Kuning", "stock" => 20, "harga" => 15000, "deskripsi" => "Pisang dengan rasa manis"],
    ["id" => "2","nama" => "Melon", "warna" => "Hijau", "stock" => 15, "harga" => 28000, "deskripsi" => "Buah berwarna hijau yang segar"],
    ["id" => "3","nama" => "Berry", "warna" => "Merah", "stock" => 8, "harga" => 12000, "deskripsi" => "Buah kecil dengan biji yang bisa dimakan"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-5">DAFTAR BUAH BUAHAN</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($m_fruits as $fruit) {
          echo '<tr>';
          echo '<td>'.$fruit["id"].'</td>';
          echo '<td>'.$fruit["nama"].'</td>';
          echo '<td>'.$fruit["warna"].'</td>';
          echo '<td>'.$fruit["stock"].'</td>';
          echo '<td>'.$fruit["harga"].'</td>';
          echo '<td>'.$fruit["deskripsi"].'</td>';
          echo '<tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>