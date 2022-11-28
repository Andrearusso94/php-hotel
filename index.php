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
if (isset($_GET['parking']) && !empty($_GET['parking'])) {
    $temp = [];
    foreach ($hotels as $item) {
        if ($item['parking'] == $_GET['parking']) {
            $temp[] = $item;
        }
    }
    $hotels = $temp;
}


//stampo array 

//var_dump($hotels);
//foreach ($hotels as $hotel) {
//foreach ($hotel as $key => $item) {
//   echo "" . $key . "  " . "" . $item;
//       echo "</br>";
//  }
//  echo "</hr>";
//}



?>


<!doctype html>
<html lang="en">

<head>
    <title>Php hotel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1>HOTELS</h1>

        <section class="p-3">
            <h3>Cerca i tuoi hotel</h3>
            <form action="index.php" method="GET">
                <select name="parking" id="parking">
                    <option value="">seleziona</option>
                    <option value="true">disponibile</option>
                    <option value="false">non disponibile</option>
                </select>
                <button type="submit">seleziona</button>
            </form>

            <br>

            <div>
                <div class="table-responsive-md">
                    <table class="table table-striped table-primary  align-middle">
                        <thead class="table-light">
                            <caption>Table Name</caption>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Parking</th>
                                <th>Vote</th>
                                <th>Distance to Center</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($hotels as $hotel) : ?>


                                <tr class="table-primary">
                                    <?php foreach ($hotel as $key => $item) : ?>
                                        <td scope="row"><?php echo $item ?></td>
                                    <?php endforeach; ?>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                </div>
                </table>
            </div>





    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>