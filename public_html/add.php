<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST') die("You cannot directly access this file!");
    
    // Connect to the database
    include_once "../resources/library/connect.php";
    
    // Init variables
    $name = $_POST['name'];
    $pin = $_POST['pin'];
    
    if(!$name ||! $pin) die ("Please fill in all fields.");
    if(!is_numeric($pin)) die ("Invalid pin number!");
    
    // Add values to the database
    $query = "INSERT INTO lights(name, pin) VALUES (?, ?)";
    $stmt = $connect->prepare($query);
    if(false == $stmt) die ("There was an error with the database: \n\n" . htmlspecialchars($connect->error));
    $stmt->bind_param('si', $name, $pin);
    $stmt->execute();
    
    echo "true";
?>
