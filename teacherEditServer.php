<?php
    //edits book in database
    $oldTitle = $_POST['oldTitle'];
    $oldAuthor = $_POST['oldAuthor'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $readingLevel =$_POST['readingLevel'];
    $length = $_POST['length'];
    $genre = $_POST['genre'];
    $trait1 = $_POST['trait1'];
    $trait2 = $_POST['trait2'];
    include "credentials.php";
    $connection = mysqli_connect($host, $user, $password, $database)
        or die("Error: " . mysqli_error($connection));
    if(!$connection) {
        echo "Error connecting";
    }
    $querry = "UPDATE books 
	           SET title='".$title."',author='".$author."',lexile='".$readingLevel."',page_length='".$length."',genre='".$genre."',trait1='".$trait1."',trait2='".$trait2."'
	           WHERE title='".$oldTitle."' AND author='".$oldAuthor."';";
    $result = mysqli_query($connection, $querry);
    mysqli_close($connection);
?>