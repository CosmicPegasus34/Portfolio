<?php
$servername = "localhost";
$username = "root";
$password = "C0304sonnic";
$dbname = "db_portfolio";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlquery = "INSERT INTO table VALUES('JOHN', 'DOE', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $data = $_REQUEST['val1'];
    if(empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}

$conn->close();
?>