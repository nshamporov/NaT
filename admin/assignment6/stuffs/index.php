<?php error_reporting(E_ERROR | E_PARSE);
     // data base connection
     $dsn = 'mysql:dbname=musicprojectdb;host=localhost';
     $dbuser ='root';
     $dbPassword ='061006nik';

        try{
            $connection = new PDO($dsn , $dbuser, $dbPassword); 
            // echo "connection successful";

        }catch(PDOException $e){
            // die ('Connection failed!' . $exception ->getMessage());
            $_SESSION['messages'][] = 'Connection failed!' . $e->getMessage();
        }

        $statement1 = "SELECT * FROM users";
        $result = $connection->query($statement1);

        // $statement2 = "SELECT * FROM email_log";
        // $result_email_log = $connection->query($statement2);

        // $statement3 = "SELECT * FROM deleted_user";
        // $result_deleted_user = $connection->query($statement3);

        // if (isset($_GET['stuff_id'])) {
        //     $id = $_GET['stuff_id'];
        //     $delete = ("DELETE FROM stuffs WHERE stuff_id = '$id' ");
        //     $connection->exec($delete);
        //  }
       
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
                <li><a href="../../../index.php">HOME</a></li>
                <li><a href="admin_login.php">Log Out</a></li>
            </ul>
        </div>

        <h1 style="margin:3rem">USER LIST</h1>

        
        <div class="stuff-list">
            <form method="GET" action="">
                <div class="button">
                        <a href="admin_insert.php" class="btn btn-white btn-animate">
                            ADD
                            <i class="fa-solid fa-plus fa-l"></i>
                        </a>
                </div>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th style="border-left: 1px solid;">Edit</th>
                        <th style="border-left: 1px solid;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) {  $id = $row['id'];?>
                       
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><a href='admin_list_edit.php?id=<?php echo $id ?>'><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="deleted.php?id=<?php echo $id ?>"><i class="fa-sharp fa-solid fa-trash" style="margin-left:12px;"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


            <!-- <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>OLD EMAIL</th>
                        <th>NEW EMAIL</th>
                        <th>UPDATED AT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result_email_log as $row) {  $id = $row['id'];?>
                       
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['old_email'] ?></td>
                            <td><?php echo $row['new_email'] ?></td>
                            <td><?php echo $row['updated_at'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> -->

<!-- 
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>DELETED AT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result_deleted_user as $row) {  $id = $row['id'];?>
                       
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['deleted_at'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> -->
            </form>
        </div>
        
    </body>
</html>