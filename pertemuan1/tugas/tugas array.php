<?php
$m_fruits = [
    ["ID" => "1","name" => "Apel", "color" => "Merah", "stock" => 5, "price" => 20000, "description" => "Apel segar baru dipetik dari pohonnya"],
    ["ID" => "2","name" => "Duku", "color" => "Kuning", "stock" => 10, "price" => 18000, "description" => "Duku manis"],
    ["ID" => "3","name" => "Jambu", "color" => "hijau", "stock" => 13, "price" => 11000, "description" => "Jambu biji yang manis dan masih segar"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>

<body class="bg-primary">
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah-Buahan</h1>
    <table class="table table-striped table-hover">
      <thead class="bg-warning">
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
                echo '<tr><td>'. $fruit["ID"]. '</td>';
                echo '<td>'.$fruit["name"].'</td>';
                echo '<td>'.$fruit["color"].'</td>';
                echo '<td>'.$fruit["stock"].'</td>';
                echo '<td>'.$fruit["price"].'</td>';
                echo '<td>'. $fruit["description"].'</td></td>';
                echo '<br>';
              }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>