<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        die('You cannot directly access this file.');
    }
    
    include_once "../resources/library/connect.php";
    echo exec("sudo python ./python/lighton.py 2>&1", $output);
    
    $id = $_POST['id'];
    echo($id);
    
    $query = "UPDATE lights SET status = 'on' WHERE id=?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
?>
