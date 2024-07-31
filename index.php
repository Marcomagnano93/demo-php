<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <!-- PHP CONDITIONS -->
    <?php 
    // array
    $names = [
        "Luca",
        "Paolo",
        "Marco"
    ];
    // associative array
    $people = [
            [
                'name' => 'Gianni',
                'age' => 22,
                'adress' => "Milano"
            ],
            [
                'name' => 'Mario',
                'age' => 56,
                'adress' => "Torino"
            ],
            [
                'name' => 'Alessia',
                'age' => 21,
                'adress' => "Palermo"
            ]
        ];

    $movies = [
        [
            'title' => 'Star Wars',
            'relaseDate' => '1987'
        ],
        [
            'title' => 'Gremlins',
            'relaseDate' => '1980'
        ],
        [
            'title' => 'Lost',
            'relaseDate' => '2007'
        ],
        [
            'title' => 'Inception',
            'relaseDate' => '2011'
        ],
    ];

    // Functions

    function filterByRelase ($movies) {
        $filteredMovies = [];

        foreach ($movies as $movie) {
            if($movie['relaseDate'] > 2000) {
                $filteredMovies[] = $movie;
            }

        }
        
        return $filteredMovies;
    }

    // if / else
    $condition = true;


    if($condition){
        $message = "Questa è la Demo";
    } else {
        $message = "No!";
    };
    
    ?>

    <!-- PHP Dynamic message -->
    <h1>
        <?= $message ?>
    </h1>

    <!-- PHP Array & foreach -->
     <h2>Array</h2>
     <ol>
        <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
        <?php endforeach ?>
     </ol>
    
     <h2>Array associativo</h2>
     <h5>Persone:</h5>
     <ul>
        <?php foreach ($people as $person) : ?>
            <li>Nome: <?= $person['name']; ?></li>
            <li>Età: <?= $person['age']; ?></li>
            <li>Indirizzo: <?= $person['adress']; ?></li> <hr>
        <?php endforeach ?>
     </ul>

     <!-- PHP Function filter -->
      <h2>Filter Function</h2>
      <ol>
        <?php foreach (filterByRelase($movies) as $movie) : ?>
            <li>Titolo: <?= $movie['title']; ?></li>
        <?php endforeach ?>
      </ol>

</body>
</html>