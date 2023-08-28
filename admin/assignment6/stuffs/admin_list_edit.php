<?php error_reporting(E_ERROR | E_PARSE);
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

        //query admins
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        $statement = "SELECT * FROM users WHERE id='$id'";
        $result = $connection->query($statement);

            foreach($result as $row) {
                $id = $row['id'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
            }

        } else {
            $id = '';
            $username = '';
            $email = '';
            $password = '';
         
        }        


        //update the data

        if (isset($_POST['submit'])) {
            // $id = $_POST['stuff_id'];

            if($_POST['username'] != NULL){
                $username = $_POST['username'];
            }

            if($_POST['email'] != NULL){
                $email = $_POST['email'];
            }

            if($_POST['password'] != NULL){
                $password = $_POST['password'];
            }

            $statement = ("UPDATE users SET username='$username',email='$email', password='$password'
            WHERE id='$id'");
            $connection->exec($statement); 

        }

        if (isset($_POST['cancel'])){
            header('Location:index.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>

    <script src="admin_list.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="tables.css">
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/55c4673143.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="nav">
            <ul class="menu-bar">
                <li><a href="index.php">HOME</a></li>
            </ul>
        </div>

        <h1 style="margin:3rem">user update</h1>
        
        <div class="container-box">
            <h3>update users</h3>
            <form method="post" action="">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="form1" name="username" class="form-control">
                    <label for="form1"><?php echo $username ?></label>
                </div>
                
                <div class="md-form">
                    <input type="email" id="form1" name="email" class="form-control">
                    <label for="form1"><?php echo $email ?></label>
                </div>

                <div class="md-form">
                    <input type="text" id="form1" name="password" class="form-control">
                    <label for="form1"><?php echo $password ?></label>
                </div>

                <div class="buttons">
                    <button name="submit" class="btn btn-1 btn-1a">Submit</button>
                    <button name="cancel" class="btn btn-1 btn-1a">Cancel</button>
                </div>
            </form>  
        </div>
</body>
</html>