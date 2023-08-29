<?php error_reporting(E_ERROR | E_PARSE);
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

    //    features 
        
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
        //all songs 
    
        require('music_query.php');
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="music.css">
    <script src="https://kit.fontawesome.com/55c4673143.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- nav - bar  -->
    <div class="nav" id="nav">
        <ul>    
            <li><img src="media/logo1.jpg"></li>
            <a href="index.php"><li>Home</li></a>
            <li class="active">Music</li>
            <a href="artist.php"><li>Artists</li></a>
            <a href="about.html"><li>About</li></a>
        </ul>
    </div>
<!-- main-body -->
    
    <div class="music-body">
        <!-- newrelease -->
        <h1>New Release</h1>
        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Save Your Tears</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks/saveyourtears.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>Be Kind</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Marshmello & Halsey - Be Kind (Lyrics).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>Lavender Haze</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lavender Haze.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>


        <!-- all songs -->
        <h1>All Songs</h1>
        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">

            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Mockingbird</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Mockingbird.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Formation</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Beyoncé - Formation (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>Music to Watch Boys To</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lana Del Rey - Music To Watch Boys To.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>Without Me</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - Without Me.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>22</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Taylor Swift - 22.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Energy</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\BEYONCE - ENERGY [AUDIO].mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Hideous</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\mehro - _hideous_ (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Hold Up</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Beyoncé - Hold Up (Audio).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>Castle</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - Castle.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Blinding Lights</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - Blinding Lights (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Chance With You</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\mehro - _chance with you_ (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>You Should Be Sad</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - You should be sad.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name ?></h3>
                <h3>Bad Guy</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - bad guy.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>Graveyard</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - Graveyard.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/zayn.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $zayn_name ?></h3>
                <h3>Sour Diesel</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\ZAYN - Sour Diesel.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>Colors</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - Colors.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/zayn.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $zayn_name ?></h3>
                <h3>Let Me</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\ZAYN - Let Me (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>In Your Eyes</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - In Your Eyes (Official Audio).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Starboy</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - Starboy ft. Daft Punk (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name ?></h3>
                <h3>When the Party's Over</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - when the party's over.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Just Lose It</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Just Lose It.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Party Monster</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - Party Monster (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/halsey.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $halsey_name ?></h3>
                <h3>New Americana</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Halsey - New Americana.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/zayn.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $zayn_name ?></h3>
                <h3>It's You</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\ZAYN - iT's YoU.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name?></h3>
                <h3>Your Power</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - Your Power (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name ?></h3>
                <h3>NDA</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - NDA (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>Fearless</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Taylor Swift - Fearless.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Cleaning Out My Closet</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Eminem - Cleanin' Out My Closet (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Reminder</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - Reminder (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Like Toy Soldiers</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Like Toy Soldiers.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>Born to Die</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lana Del Rey - Born To Die.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>Born This Way</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lady Gaga - Born This Way (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>Love Story</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Indila - Love Story.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>Poker Face</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lady Gaga - Poker Face (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Sing For The Moment</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Sing For The Moment.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>Judas</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lady Gaga - Judas (Lyrics).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>The Edge Of Glory</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lady Gaga - The Edge Of Glory (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>High By The Beach</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lana Del Rey - High By The Beach.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>video Games</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lana Del Rey - Video Games.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>You Belong With Me</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Taylor Swift - You Belong With Me.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Coastline</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\mehro - _coastline_ (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Perfume</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\mehro - _perfume_ (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Sorry</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Beyoncé - Sorry (Official Audio).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>Summertime Sadness</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lana Del Rey - Summertime Sadness (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Not Alone</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\mehro - _not alone_ (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/zayn.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $zayn_name ?></h3>
                <h3>Befour</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\ZAYN - BeFoUr.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>Just Dance</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Just Dance - Lady Gaga (Feat. Colby O'Donis) (Lyrics).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name ?></h3>
                <h3>Bury A Friend</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - bury a friend.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Move</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\BEYONCE - MOVE [AUDIO].mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/bellieelliesh.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $billie_eilish_name ?></h3>
                <h3>Therefor I Am</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Billie Eilish - Therefore I Am (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>I Knew You Were Trouble</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Taylor Swift - I Knew You Were Trouble.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/theweekend.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $weekend_name ?></h3>
                <h3>Heartless</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\The Weeknd - Heartless (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/beyonce.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $beyonce_name ?></h3>
                <h3>Virgo's Groove</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Beyoncé - VIRGO'S GROOVE (Audio) (432hz).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/ladygaga.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $ladygaga_name ?></h3>
                <h3>Bad Romance</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Lady Gaga - Bad Romance (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/taylorswift.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $taylorswift_name ?></h3>
                <h3>We Are Never Ever Getting Back Together</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Taylor Swift - We Are Never Ever Getting Back Together.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/mehro.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $mehro_name ?></h3>
                <h3>Thinking Of U</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Thinking of You.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/eminem.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $eminem_name ?></h3>
                <h3>Without Me</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\Eminem - Without Me (Official Music Video).mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/lanadelray.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $lanadelrey_name ?></h3>
                <h3>Honeymoon</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\LANA DEL REY - HONEYMOON.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="container">
            <div class="artist-img">
                <img src="media/zayn.jpg">
            </div>

            <div class="song-info">
                <h3><?php echo $zayn_name ?></h3>
                <h3>Entertainer</h3>
            </div>

            <div class="list">
                <audio controls>
                    <source src="tracks\ZAYN - Entertainer (Official Video).mp3" type="audio/mp3">
                </audio>
            </div>
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
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-line"></i></a>
        </div>

    </div>
</body>
</html>