<a href="index.html">Atpakaļ</a>
<br>

<?php

$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$query = "SELECT full_name, book_title, review_text, rating FROM book_review";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>";
            echo "<div>";
                echo "Reviewer full name: " . $row["full_name"] . "<br>";
                echo "Reviewed book title: " . $row["book_title"] . "<br>";
                echo "Review text: " . $row["review_text"] . "<br>";
                echo "Rating: ";
                $rating = $row["rating"];
                if($rating == 5){
                    echo "Lieliska<br>";
                }elseif($rating == 4){
                    echo "Laba<br>";
                }elseif($rating == 3){
                    echo "Viduvēja<br>";
                }elseif($rating == 2){
                    echo "Slikta<br>";
                }elseif($rating == 1){
                    echo "Nelasāma<br>";
                }
            echo "</div>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}
$conn->close();