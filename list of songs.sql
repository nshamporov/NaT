CREATE DATABASE MusicProjectDB;

USE MusicProjectDB;


CREATE TABLE Artist (
    artist_id INT PRIMARY KEY,
    artist_name VARCHAR(100)
);

CREATE TABLE Album (
    album_id INT PRIMARY KEY,
    album_name VARCHAR(100),
    artist_id INT,
    FOREIGN KEY (artist_id) REFERENCES Artist(artist_id)
);

CREATE TABLE Track (
    track_id INT PRIMARY KEY,
    track_name VARCHAR(100),
    track_duration VARCHAR(10),
    album_id INT,
    FOREIGN KEY (album_id) REFERENCES Album(album_id)
);




INSERT INTO Artist (artist_id, artist_name) VALUES (1, 'Zayn');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (1, 'Mind of Mine', 1);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (1, 'Pillowtalk', '3:23', 1),
    (2, 'It\'s You', '3:47', 1),
    (3, 'Befour', '3:28', 1);
    

INSERT INTO Album (album_id, album_name, artist_id) VALUES (2, 'Icarus Falls', 1);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (4, 'Let Me', '3:05', 2),
    (5, 'Sour Diesel', '4:04', 2),
    (6, 'Entertainer', '3:20', 2);
   





--The weekend

INSERT INTO Artist (artist_id, artist_name) VALUES (2, 'The Weekend');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (3, 'Starboy', 2);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (7, 'Starboy', '3:50', 3),
    (8, 'Party Monster', '4:09', 3),
    (9, 'Reminder', '3:38', 3);
    

INSERT INTO Album (album_id, album_name, artist_id) VALUES (4, 'After Hours', 2);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (10, 'Blinding Lights', '3:20', 4),
    (11, 'Heartless', '3:20', 4),
    (12, 'In Your Eyes', '3:57', 4);




--Billie Eilish
    


INSERT INTO Artist (artist_id, artist_name) VALUES (3, 'Billie Eilish');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (5, 'When We All Fall Asleep, Where Do We Go?', 3);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (13, 'Bad Guy', '3:14', 5),
    (14, 'Bury a Friend', '3:13', 5),
    (15, 'When the Party\'s Over', '3:16', 5);
    

INSERT INTO Album (album_id, album_name, artist_id) VALUES (6, 'Happier Than Ever', 3);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (16, 'Therefore I Am', '2:54', 6),
    (17, 'Your Power', '4:07', 6),
    (18, 'NDA', '3:15', 6);
    




--Taylor Swift

INSERT INTO Artist (artist_id, artist_name) VALUES (4, 'Taylor Swift');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (7, 'Fearless', 4);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (19, 'Love Story', '3:55', 7),
    (20, 'You Belong with Me', '3:52', 7),
    (21, 'Fearless', '4:01', 7);
    
INSERT INTO Album (album_id, album_name, artist_id) VALUES (8, 'Red', 4);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (22, 'We Are Never Ever Getting Back Together', '3:13', 8),
    (23, 'I Knew You Were Trouble', '3:39', 8),
    (24, '22', '3:52', 8);
   


--Halsey


INSERT INTO Artist (artist_id, artist_name) VALUES (5, 'Halsey');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (9, 'Badlands', 5);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (25, 'New Americana', '3:04', 9),
    (26, 'Colors', '4:09', 9),
    (27, 'Castle', '4:38', 9);
 

INSERT INTO Album (album_id, album_name, artist_id) VALUES (10, 'Manic', 5);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (28, 'Without Me', '3:22', 10),
    (29, 'Graveyard', '3:01', 10),
    (30, 'You Should Be Sad', '3:25', 10);
   



--Beyonce


INSERT INTO Artist (artist_id, artist_name) VALUES (6, 'Beyonce');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (11, 'Lemonade', 6);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (31, 'Formation', '3:26', 11),
    (32, 'Sorry', '3:53', 11),
    (33, 'Hold Up', '3:41', 11);
    

INSERT INTO Album (album_id, album_name, artist_id) VALUES (12, 'Renaissance', 6);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (34, 'ENERGY', '1:56', 12),
    (35, 'MOVE', '3:23', 12),
    (36, 'VIRGO\'S GROOVE', '6:08', 12);
    



--Lady Gaga


INSERT INTO Artist (artist_id, artist_name) VALUES (7, 'Lady Gaga');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (13, 'The Fame', 7);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (37, 'Just Dance', '4:02', 13),
    (38, 'Poker Face', '3:58', 13),
    (39, 'Bad Romance', '4:54', 13);
    

INSERT INTO Album (album_id, album_name, artist_id) VALUES (14, 'Born This Way', 7);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (40, 'Born This Way', '4:20', 14),
    (41, 'Judas', '4:10', 14),
    (42, 'The Edge of Glory', '5:21', 14);



--Lana Del Rey

INSERT INTO Artist (artist_id, artist_name) VALUES (8, 'Lana Del Rey');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (15, 'Born to Die', 8);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (43, 'Video Games', '4:42', 15),
    (44, 'Summertime Sadness', '4:25', 15),
    (45, 'Born to Die', '4:45', 15);

   
INSERT INTO Album (album_id, album_name, artist_id) VALUES (16, 'Honeymoon', 8);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (46, 'Music to Watch Boys To', '4:50', 16),
    (47, 'High by the Beach', '4:17', 16),
    (48, 'Honeymoon', '5:50', 16);
    




--Eminem

INSERT INTO Artist (artist_id, artist_name) VALUES (9, 'Eminem');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (17, 'The Eminem Show', 9);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (49, 'Without Me', '4:50', 17),
    (50, 'Cleaning Out My Closet', '4:58', 17),
    (51, 'Sing for the Moment', '5:40', 17);
   

INSERT INTO Album (album_id, album_name, artist_id) VALUES (18, 'Encore', 9);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (52, 'Like Toy Soldiers', '4:56', 18),
    (53, 'Mockingbird', '4:11', 18),
    (54, 'Just Lose It', '4:08', 18);
       
    





--Mehro


INSERT INTO Artist (artist_id, artist_name) VALUES (10, 'Mehro');

INSERT INTO Album (album_id, album_name, artist_id) VALUES (19, 'Sky on Fire', 10);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (55, 'Thinking of U', '3:30', 19),
    (56, 'Hideout', '4:07', 19),
    (57, 'Coastline', '3:40', 19);
   

INSERT INTO Album (album_id, album_name, artist_id) VALUES (20, 'Howling', 10);
INSERT INTO Track (track_id, track_name, track_duration, album_id) VALUES
    (58, 'Perfume', '3:32', 20),
    (59, 'Chance with You', '3:16', 20),
    (60, 'Lonely', '3:57', 20);