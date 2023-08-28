<?php 

  // data base connection
  $dsn = 'mysql:dbname=musicprojectdb;host=localhost';
  $dbuser ='root';
  $dbPassword ='061006nik';

  try{
      $connection = new PDO($dsn , $dbuser, $dbPassword); 
    //   echo "connection successful";

  }catch(PDOException $e){
      // die ('Connection failed!' . $exception ->getMessage());
      $_SESSION['messages'][] = 'Connection failed!' . $e->getMessage();
  }
   
        $eminem = ("SELECT * FROM artist WHERE artist_id=9");
        $weekend = ("SELECT * FROM artist WHERE artist_id=2");
        $halsey = ("SELECT * FROM artist WHERE artist_id=5");
        $billie = ("SELECT * FROM artist WHERE artist_id=3");
        $taylorswift = ("SELECT * FROM artist WHERE artist_id=4");
        $zayn = ("SELECT * FROM artist WHERE artist_id=4");
        $beyonce = ("SELECT * FROM artist WHERE artist_id=6");
        $ladygaga = ("SELECT * FROM artist WHERE artist_id=7");
        $lanadelrey = ("SELECT * FROM artist WHERE artist_id=8");
        $mehro = ("SELECT * FROM artist WHERE artist_id=10");



$result_weekend = $connection->query($weekend);
$result_halsey = $connection->query($halsey);
$result_taylorswift = $connection->query($taylorswift);
$result_eminem = $connection->query($eminem);
$result_billie_eilish = $connection->query($billie);
$result_zayn = $connection->query($zayn);
$result_beyonce = $connection->query($beyonce);
$result_ladygaga = $connection->query($ladygaga);
$result_lanadelrey = $connection->query($lanadelrey);
$result_mehro = $connection->query($mehro);

foreach ($result_weekend as $row) {
    $weekend_name = $row['artist_name'];
}

foreach ($result_halsey as $row) {
    $halsey_name = $row['artist_name'];
}

foreach ($result_taylorswift as $row) {
    $taylorswift_name = $row['artist_name'];
}

foreach ($result_eminem as $row) {
    $eminem_name = $row['artist_name'];
}

foreach ($result_billie_eilish as $row) {
    $billie_eilish_name = $row['artist_name'];
}

foreach ($result_zayn as $row) {
    $zayn_name = $row['artist_name'];
}

foreach ($result_lanadelrey as $row) {
    $lanadelrey_name = $row['artist_name'];
}

foreach ($result_mehro as $row) {
    $mehro_name = $row['artist_name'];
}

foreach ($result_beyonce as $row) {
    $beyonce_name = $row['artist_name'];
}

foreach ($result_ladygaga as $row) {
    $ladygaga_name = $row['artist_name'];
}


// songnames

// $statement = "SELECT * FROM track";
// $result = $connection->query($statement);

// foreach ($result as $row) {
//     echo $track =  $row['track_name'] . "<br>";
// }





?>