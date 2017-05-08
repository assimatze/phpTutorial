<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>

    <?php include "navbar.php"; ?>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="starter-template">
            <h1>Die Array Aufgabe</h1>
            <p class="lead">Hier soll ein Array schön ausgegeben werden!</p>
        </div>

        <div class="col-3">
            <?php $arrayList = ["Automarken" => ["Mercedes", "BMW", "Ford"],"Fahrraeder" => ["Fischer", "Mountainbike", "Ford"]];?>
            <?php foreach($arrayList as $kategorie => $items){ ?>
                <div class="list-group">
                <a class='list-group-item active'><?php echo $kategorie ?></a>
                <?php foreach ($items as $item) { ?>
                <a class='list-group-item'><?php echo $item ?></a>
                <?php } ?>
                </div>
                <?php echo "<br />"; } ?>

            <?php
            $arrayList = ["Automarken" => ["Mercedes", "BMW", "Ford"],"Fahrraeder" => ["Fischer", "Mountainbike", "Ford"]];
            foreach($arrayList as $kategorie => $items){
              echo "<div class='list-group'>";
              echo "<a class='list-group-item active'> $kategorie</a>";
              foreach ($items as $item) {
                echo "<a class='list-group-item'> $item</a>";
              }
              echo "</div>";
              echo "<br />";
            }
            ?>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>

</html>
