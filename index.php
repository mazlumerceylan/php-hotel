<?php

$hotels = [
  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],

];
// Stampo in pagina i dati con un ciclo.
// foreach($hotels as $hotel) {
//   echo "Nome dell'Hotel: " . $hotel['name'] . "<br>";
//   echo "Descrizione: " . $hotel['description'] . "<br>";
//   echo "Parcheggio: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";
//   echo "Voto: " . $hotel['vote'] . "<br>";
//   echo "Distanza dal centro: " . $hotel['distance_to_center'] . " km<br>";
//   echo "<hr>";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel´s</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<div class="container">
        <h1 class="my-4">Lista Hotel</h1>
        <form method="POST" action="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="parking" name="parking">
                <label class="form-check-label" for="parking">Mostra solo hotel con parcheggio</label>
            </div>
            
            <button type="submit" class="btn btn-primary my-2">Filtra</button>
            <a href="index.php" class="btn btn-secondary my-2">Reset</a>

        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $filterParking = $_POST['parking'] ?? false;
                    foreach($hotels as $hotel) {
                        if ($filterParking && !$hotel['parking']) {
                            continue;
                        }
                        echo "<tr>";
                        echo "<td>" . $hotel['name'] . "</td>";
                        echo "<td>" . $hotel['description'] . "</td>";
                        echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                        echo "<td>" . $hotel['vote'] . "</td>";
                        echo "<td>" . $hotel['distance_to_center'] . " km</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>