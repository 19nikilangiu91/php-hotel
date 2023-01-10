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

  echo "Name: " . $name . "<br>" .
    "Description: " . $description . "<br>" .
    "Parking: " . $parking . "<br>" .
    "Vote: " . $vote . "<br>" .
    "Distance: " . $distance . "<br> <br>";
}
?>