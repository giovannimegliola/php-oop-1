<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="js/script.js" type="module"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <title>OOP Shop</title>
</head>
<body>
  <header class="container text-center py-4">
    <h1>Movies List</h1>
  </header>

  <main class="container">

  <?php 

class Movie 
{
  // variabili d'istanza
  public int $id;
  public string $title;
  public string $overview;
  public float $vote_average;
  public string $poster_path;
  public string $original_language;

  //costruttore
  function __construct($id,$title,$overview,$vote,$image,$language)
  {
    $this->id = $id;
    $this->title = $title;
    $this->overview = $overview;
    $this->vote_average = $vote;
    $this->poster_path = $image;
    $this->original_language = $language;
    
  }

  public function infoMovies() {
    echo "Id: {$this->id} <br>";
    echo "Title: {$this->title} <br>";
    echo "Overview: {$this->overview} <br>";
    echo "Vote: {$this->vote_average} <br>";
    echo "Poster: {$this->poster_path}<br>";
    echo "Language: {$this->original_language}";
  }
}
  
  // creazione di 2 oggetti 'Movie'

  $movie1 = new Movie ("9381","Babylon A.D.","A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.", "5.601", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg","en");
  $movie2 = new Movie ("9381","Babylon A.D.","A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.", "5.601", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg","en");

  // stampa delle rispettive info

  echo "Movie 1: <br>";
  $movie1 ->infoMovies();

  echo "<br>";

  echo "Movie 2: <br>";
  $movie2 ->infoMovies();
  
  ?>
    
  </main>
  
  <footer class="container">
    footer
  </footer>

</body>
</html>
