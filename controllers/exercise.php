    <!-- PHP CONDITIONS -->
    <?php 
    
    
    $heading = 'exercise';
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
            ],
            [
                'name' => 'Andrea',
                'age' => 16,
                'adress' => "Milano"
            ],
            [
                'name' => 'Marika',
                'age' => 72,
                'adress' => "Torino"
            ],
            [
                'name' => 'Alex',
                'age' => 34,
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

    function filter ($items, $fn) {
        $filteredItems = [];

        foreach ($items as $item){
            if($fn($item)){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }
    // Lambda functions [funzioni anonime]

    $filterByAdress = filter($people, function ($person){

        return $person['adress'] === 'Torino';
    });

    $filteredByAge = filter($people, function ($person){
        return $person['age'] >= 30;
    });

    // if / else
    $condition = true;


    if($condition){
        $message = "Questa è la Demo";
    } else {
        $message = "No!";
    };
    
require "view/exercise.view.php";