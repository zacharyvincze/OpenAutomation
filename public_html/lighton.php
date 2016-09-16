<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        die('You cannot directly access this file.');
    }
    
    //Connect to the database
    include_once "../resources/library/connect.php";
    
    $id = $_POST['id'];
    $pin = $_POST['pin'];
    
    //Run python command
    $command_output = exec("sudo python ./python/lighton.py " . $pin . " 2>&1", $output, $return_var);
    if($return_var) die("There was an error with the python script. \n\n" . $command_output);
    
    $query = "UPDATE lights SET status = 'on' WHERE id=?";
    $stmt = $connect->prepare($query);
    if(false===$stmt) die ("There was an error with the database: \n\n" . htmlspecialchars($connect->error));
    $stmt->bind_param('s', $id);
    $stmt->execute();
    
    echo "true";
?>
