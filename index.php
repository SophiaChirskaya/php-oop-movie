<?php
require_once './Traits/HasDirector.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';
require_once './db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Movies</h2>
        <div class="cards-container d-flex flex-column gap-4">
            <?php
            foreach($movies as $movie) {
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $movie->title; ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo $movie->getDirector(); ?>
                    </h6>
                    <p class="card-text">
                        <?php echo $movie->year; ?>
                    </p>
                    <p class="card-text">
                        <?php echo $movie->getGenreName(); ?>
                    </p>
                    <p class="card-text">
                        <?php echo $movie->description; ?>
                    </p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>    
</body>
</html>