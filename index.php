<!-- 1) Prima stampate in pagina i dati, senza preoccuparvi dello stile. -->
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
?>
<?php

foreach ($hotels as $hotel) {
  $name = $hotel["name"];
  $description = $hotel["description"];
  $parking = $hotel["parking"];
  $vote = $hotel["vote"];
  $distance = $hotel["distance_to_center"];

  // echo "Name: " . $name . "<br>" .
  //   "Description: " . $description . "<br>" .
  //   "Parking: " . $parking . "<br>" .
  //   "Vote: " . $vote . "<br>" .
  //   "Distance: " . $distance . "<br> <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>php-hotel</title>
</head>

<!-- 2) Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->

<body>
  <div class="container mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Distance</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($hotels as $hotel) {
          ?>
          <tr>
            <td>
              <?php echo $hotel["name"] ?>
            </td>
            <td>
              <?php echo $hotel["description"] ?>
            </td>
            <td>
              <?php
              if ($hotel["parking"] === true) {
                echo "Available";
              } else {
                echo "Unavaible";
              } ?>
            </td>
            <td>
              <?php echo $hotel["vote"] ?>
            </td>
            <td>
              <?php echo $hotel["distance_to_center"] . " km" ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>