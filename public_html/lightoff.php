<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        die('You cannot directly access this file.');
    }
    
    include_once "../resources/library/connect.php";
    
    echo exec("sudo python ./python/lightoff.py 2>&1", $output);
    
    $id = 1;
    $query = "UPDATE lights SET status='off' WHERE id=?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
?>
