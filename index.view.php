<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

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

      <!-- PHP Lambda Function -->
       <h2>Lambda Function (anonymous functions)</h2>
       <h5>Persone filtrate per indirizzo(Torino):</h5>
       <ul>
        <?php foreach ($filterByAdress as $person) : ?>
            <li><?= $person['name'] ?></li>
            <li><?= $person['adress'] ?></li> <hr>
        <?php endforeach ?>
       </ul>
       <h5>Persone filtrate per età (maggiori di 30 anni):</h5>
       <ul>
        <?php foreach ($filteredByAge as $person) : ?>
            <li><?= $person['name'] ?></li>
            <li><?= $person['age'] ?></li> <hr>
        <?php endforeach ?>    
       </ul>
</body>
</html>