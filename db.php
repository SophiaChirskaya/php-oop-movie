<?php
$crime_genre = new Genre('Crime', 'Fictional stories based on imagined scientific or technological advances');

$movies = [
    new Movie('Il padrino', 1998, 8.8, $crime_genre),
    new Movie('The Shawshank Redemption', 1993, 9.2, new Genre('Science Fiction', 'Fictional stories based on imagined scientific or technological advances')),
    new Movie('The Shawshank Redemption', 1993, 9.2, new Genre('Science Fiction', 'Fictional stories based on imagined scientific or technological advances'))
];

$movies[0]->description = 'The story of a mans resilience and hope inside a prison over two decades';
$movies[1]->description = 'The story of a mans resilience and hope inside a prison over two decades';
$movies[2]->description = 'The story of a mans resilience and hope inside a prison over two decades';
?>