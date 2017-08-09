<?php



spl_autoload_register(function ($className){

    if(file_exists("./src/{$className}.php")){
      require "./src/{$className}.php";
    }
});

$pdo = new PDO('mysql:host=localhost;dbname=blog',
               'root',
               '');

$result = $pdo->query("SELECT * FROM `post`");
foreach($result AS $row){
  echo $row[1];

}


?>
