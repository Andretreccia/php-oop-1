 <?php
    /* - è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */


    class Movie
    {
        public $title;
        public $genre;
        public $director;
        public $duration;

        function __construct($title, $genre, $director, $duration)
        {
            $this->title =  $title;
            $this->genre =  $genre;
            $this->director = $director;
            $this->duration = $duration;
        }

        public function getdirector()
        {
            return $this->title;
        }
    }

    $movie_1 = new Movie('Le ali della libertà', 'Drama', 'Frank Darabont', 142);
    $movie_2 = new Movie("Matrix", 'action', 'Andy e Larry Wachowski', 136);

    var_dump($movie_1);
    var_dump($movie_2);