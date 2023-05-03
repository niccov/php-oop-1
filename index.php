<?php

require_once './models/movie.php';
require_once './models/genre.php';

$starWars = new Movie("StarWars", "1995", new Genres ("fantascienza", "fantasy", "action"));

$shrek = new Movie("Shrek", "2005", new Genres ("drama", "fantasy", "cartoon"));

$pulpFiction = new Movie("Pulp Fiction", "1996", new Genres ("drama", "action", "gangstar"));
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>MOVIE</h1>
    </div>

    <table class="table text-center pt-2">
        <thead>
            <tr>
              <th>movie</th>
              <th>release year</th>
              <th>genre</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $starWars->name ?></td>
                <td><?php echo $starWars->releaseYear ?></td>
                <td><?php echo $starWars->genre->getAllGenres() ?></td>
            </tr>

            <tr>
                <td><?php echo $shrek->name ?></td>
                <td><?php echo $shrek->releaseYear ?></td>
                <td><?php echo $shrek->genre->getAllGenres() ?></td>
            </tr>

            <tr>
                <td><?php echo $pulpFiction->name ?></td>
                <td><?php echo $pulpFiction->releaseYear ?></td>
                <td><?php echo $pulpFiction->genre->getAllGenres() ?></td>
            </tr>
        </tbody>
    </table>
  
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>