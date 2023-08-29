<?php
    session_start();
    // data base connection
        $dsn = 'mysql:dbname=musicprojectdb;host=localhost';
        $dbuser ='root';
        $dbPassword ='061006nik';
    
        try{
            $connection = new PDO($dsn , $dbuser, $dbPassword); 
            echo "";
    
        }catch(PDOException $e){
            // die ('Connection failed!' . $exception ->getMessage());
            $_SESSION['messages'][] = 'Connection failed!' . $e->getMessage();
        }

        
        $weekend = ("SELECT * FROM artist WHERE artist_id=2");
        $halsey = ("SELECT * FROM artist WHERE artist_id=5");
        $taylorswift = ("SELECT * FROM artist WHERE artist_id=4");


        $result_weekend = $connection->query($weekend);
        $result_halsey = $connection->query($halsey);
        $result_taylorswift = $connection->query($taylorswift);

        foreach ($result_weekend as $row) {
            $weekend_name = $row['artist_name'];
        }

        foreach ($result_halsey as $row) {
            $halsey_name = $row['artist_name'];
        }

        foreach ($result_taylorswift as $row) {
            $taylorswift_name = $row['artist_name'];
        }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/55c4673143.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- nav - bar  -->
    <div class="nav" id="nav">
        <ul>    
            <li><img src="media/logo1.jpg"></li>
            <li class="active">Home</li>
            <a href="music.php"><li>Music</li></a>
            <a href="artist.php"><li>Artists</li></a>
            <a href="about.html"><li>About</li></a>
            <a href="admin/assignment6/stuffs/admin_login.php" style="margin-left: 800px;"><li>Admin Login</li></a>
        </ul>
    </div>
<!-- main-body -->
    <div class="main-body">
        <div class="backgroud">
            <img src="media/hero1.jpg">
        </div>

        <h1>New Releases:</h1>
        <div class="features">
           
<!-- //new song boxs -->
            <a href="music.php">
            <div class="new-songs">
                <div class="boxes">
                    <div class="img">
                        <img src="media/theweekend.jpg">
                    </div>
                    <div class="des">
                        <h2><?php echo $weekend_name?></h2>
                        <p>Save Your Tears</p>
                    </div>
                </div>    
            </div>
            </a>
            <!-- box 2 starts -->
            <a href="music.php">
            <div class="new-songs">
                <div class="boxes">
                    <div class="img">
                        <img src="media/halsey.jpg">
                    </div>

                    <div class="des">
                        <h2><?php echo $halsey_name ?></h2>
                        <p>Be Kind</p>
                    </div>
                </div>
            </div>
            </a>
            <!-- box 3 start -->
            <a href="music.php">
            <div class="new-songs">
                <div class="boxes">
                    <div class="img">
                        <img src="media/taylorswift.jpg">
                    </div>

                    <div class="des">
                        <h2><?php echo $taylorswift_name ?></h2>
                        <p>Lavendar Haze</p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">

        <div class="names">
            <h2>NAT Music Webite</h2>
            <h3>Created By:</h3>
            <p>Nikita, Talha, Ayesha</p>
        </div>

        <div class="go-back">
            <a href="#nav"><h2>Go Back To Top</h2></a>
            <a href="#nav"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>
        </div>


        <div class="social">
            <h2>FOLLOW US:</h2>
            <a href="https://www.facebook.com/profile.php?id=100080465006403"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/nikita.shamporov/"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://line.me/ti/p/gwckU7pdk3"><i class="fa-brands fa-line"></i></a>
        </div>

    </div>
</body>
</html>