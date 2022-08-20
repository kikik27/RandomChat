    <?php
    $user = 'DEVARO';
    $pass = '020422';
    $database = 'anonimchat';
    $hostname = 'localhost';

    // Create connection
$conn = new mysqli($hostname, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    
}


?>