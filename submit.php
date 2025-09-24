<a href="index.html">Atpakaļ</a>

<?php

echo "<br>Dati veiksmīgi nosutīti!<br>";

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

$fullName = $_POST["name"] . " " . $_POST["surname"];
$bookTitle = $_POST["title"];
$reviewText = $_POST["review"];
$rating = $_POST["rating"];
$query = "INSERT INTO book_review (full_name, book_title, review_text, rating) VALUES ('$fullName','$bookTitle','$reviewText','$rating')";