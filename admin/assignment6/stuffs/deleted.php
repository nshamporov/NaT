<?php 
    // data base connection
    $dsn = 'mysql:dbname=musicprojectdb;host=localhost';
        $dbuser ='root';
        $dbPassword ='061006nik';

    try {
        $connection = new PDO($dsn , $dbuser, $dbPassword); 
        // echo "connection successful";

    } catch(PDOException $e) {
        // die ('Connection failed!' . $exception ->getMessage());
        $_SESSION['messages'][] = 'Connection failed!' . $e->getMessage();
    }


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete = ("DELETE FROM users WHERE id = '$id' ");
        $connection->exec($delete);
        header('Location:index.php');
     }
   
?>