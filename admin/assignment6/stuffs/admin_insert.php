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

        //insert the data

        if (isset($_POST['cancel'])){
            header('Location:index.php');
        }

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $statement = ("INSERT INTO users(username,email,password)
                VALUES('$username','$email','$password')");
            $connection->exec($statement);
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

        <!-- <h1 style="margin:3rem">user LIST</h1> -->
        
        <div class="container-box">
            <h3>Insert New users</h3>
            <form method="post" action="">
                <!-- Material input -->
                <div class="md-form">
                    <input type="text" id="form1" name="username" class="form-control">
                    <label for="form1">Username</label>
                </div>

                <div class="md-form">
                    <input type="text" id="form1" name="email" class="form-control">
                    <label for="form1">email</label>
                </div>

                <div class="md-form">
                    <input type="text" id="form1" name="password" class="form-control">
                    <label for="form1">password</label>
                </div>

                <div class="buttons">
                    <button name="submit" class="btn btn-1 btn-1a">Submit</button>
                    <button name="cancel" class="btn btn-1 btn-1a">Cancel</button>
                </div>
            </form>  
        </div>
</body>
</html>