<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Fly me to the moon Lyrics</title>
</head>
<style>
       body{
        background-image: url('okay.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

  </style>
      <body>

  <style type="text/css">
    #text{
            height: 25px;
          border-radius: 5px;
          padding: 4px;
          border: solid thin #aaa;
          width: 100%

      </style>
      <a href="logout.php"><div style="font-size: 20px;margin:10px;text-align:right;
      color: red;">Logout</div></a>

      <div style="font-size: 25px;margin:10px;color:blue;"> Hello, <?php echo 
      $user_data['user_name']; ?></div>

      <h1><center><div style="font-size: 40px;color:blue;">Fly me to the moon Lyrics</center></h1></div>

<div style="font-size: 30px;margin: 10px;text-align: center;color: black ;">Fly me to the moon<br>
Let me play among the stars<br>
Let me see what spring is like on<br>
A-Jupiter and Mars<br>
In other words, hold my hand<br>
In other words, baby, kiss me<br>
Fill my heart with song and let me sing forevermore<br>
You are all I long for<br>
All I worship and adore
In other words, please be true<br>
In other words, I love you<br>
Fill my heart with song<br>
Let me sing forevermore<br>
You are all I long for, all I worship and adore<br>
In other words, please be true<br>
In other words<br>
In other words<br>
I love you... </p><br></div>

  </body>
</html>