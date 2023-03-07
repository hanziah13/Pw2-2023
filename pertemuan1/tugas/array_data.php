<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  //Multidimensional Array
  echo '<br><br>';

  $m_fruits = [
      ["name" => "Manggis", "color" => "Ungu", "stock" => 20, "price" => 35.000, "description" => "Memili rasa asam yang menyegarkan"],
      ["name" => "Alpukat", "color" => "Hijau", "stock" => 15, "price" => 30.000, "description" => "Memiliki 1000 manfaat"],
      ["name" => "Jeruk", "color" => "Orange", "stock" => 15, "price" => 13.000, "description" => "Memiliki vitamin C yang tinggi"],
      ["name" => "Mangga", "color" => "Hijau", "stock" => 10, "price" => 15.000, "description" => "Memiliki banyak jenis, dan ukuran yang bervariasi"],
      ["name" => "Pisang", "color" => "Kuning", "stock" => 10, "price" => 12.000, "description" => "Memiliki rasa yang manis, dan jenis yang banyak"]
    ];

  foreach ($m_fruits as $fruits) {
      echo '<li>' . $fruits ["name"] . '</li>';
      echo '<li>' . $fruits ["color"] . '</li>';
      echo '<li>' . $fruits ["stock"] . '</li>';
      echo '<li>' . $fruits ["price"] . '</li>';
      echo '<li>' . $fruits ["description"] . '</li>';
      echo '<br>';
  }
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
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
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
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */

        $data=array('Manggis'=>array('1','Manggis','Ungu','20','35.000','Memiliki rasa asam yang menyegarkan'),
                        'Alpukat'=>array('2','Alpukat','Hijau','15','30.000','Memiliki 1000 manfaat'),
                        'Jeruk'=>array('3','Jeruk','Orange','15','13.000','Memiliki kandungan vitamin C yang tinggi'),
                        'Mangga'=>array('4','Mangga','Hijau','10','15.000','Memiliki banyak jenis, dan ukurannya bervariasi'),
                        'Pisang'=>array('5','Pisang','Kuning','10','12.000','Memiliki rasa yang manis, dan jenis yang banyak')
                        );
        echo "<tr>";
        foreach($data['Manggis'] as $nama) {
            echo "<td table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Alpukat'] as $nama) {
            echo "<td table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Jeruk'] as $nama) {
            echo "<td table-striped table-hover>$nama</td>";
            }
        echo "<tr>";
        foreach($data['Mangga'] as $nama) {
            echo "<td table-striped table-hover>$nama</td>";
                }
        echo "<tr>";
        foreach($data['Pisang'] as $nama) {
            echo "<td table-striped table-hover>$nama</td>";
            }
        echo "</tr>"
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>