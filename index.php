<?php
$hotels = [
  [
    'name' => 'Hotel Vesuvio',
    'description' => 'Struttura moderna con vista sul golfo e colazione inclusa.',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 2,
  ],
  [
    'name' => 'Albergo Centro Storico',
    'description' => 'Piccolo hotel in un palazzo storico nel cuore della città.',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 1,
  ],
  [
    'name' => 'Sea Breeze Resort',
    'description' => 'Resort sul mare con piscina esterna e accesso privato alla spiaggia.',
    'parking' => true,
    'vote' => 3,
    'distance_to_center' => 5,
  ],
  [
    'name' => 'Business Hotel Station',
    'description' => 'Hotel vicino alla stazione, ideale per soggiorni di lavoro brevi.',
    'parking' => false,
    'vote' => 3,
    'distance_to_center' => 2,
  ],
  [
    'name' => 'Country House Green Hills',
    'description' => 'Casa di campagna immersa nel verde con ristorante tipico.',
    'parking' => true,
    'vote' => 5,
    'distance_to_center' => 4,
  ],
  [
    'name' => 'Budget Inn',
    'description' => 'Alloggio economico con camere essenziali e Wi-Fi gratuito.',
    'parking' => false,
    'vote' => 2,
    'distance_to_center' => 3,
  ],
  [
    'name' => 'Luxury Suites Palace',
    'description' => 'Hotel di lusso con spa, palestra e servizio in camera 24 ore.',
    'parking' => true,
    'vote' => 5,
    'distance_to_center' => 1,
  ],
];

$parcheggio_richiesto = false;

if (isset($_GET['parcheggio']) && $_GET['parcheggio'] == "on") {

  $parcheggio_richiesto = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <h1>HOTELS</h1>
      </div>
      <hr>
      <h2>FILTRI</h2>
      <form action="">

        <input id="parcheggio" name="parcheggio" type="checkbox">
        <label for="parcheggio">parcheggio</label>

        <button>Cerca</button>

      </form>
      <hr>
      <table>
        <thead>
          <tr>
            <th>NOME</th>
            <th>DESCRIZIONE</th>
            <th>PARCHEGGIO</th>
            <th>VOTO</th>
            <th>DISTANZA DAL CENTRO</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($hotels as $hotel) {

            if ($parcheggio_richiesto) {
              if (!$hotel['parking']) {
                continue;
              }
            }

          ?>


            <tr>
              <td><?php echo $hotel['name']  ?></td>
              <td><?php echo $hotel['description']  ?></td>

              <td><?php if ($hotel['parking'] == true) {
                    echo "presente";
                  } else {
                    echo "non presente";
                  }
                  ?></td>

              <td><?php echo $hotel['vote']  ?></td>
              <td><?php echo $hotel['distance_to_center']  ?></td>
            </tr>

          <?php
          }
          ?>
        </tbody>

      </table>

    </div>
  </div>
  </div>


</body>

</html>