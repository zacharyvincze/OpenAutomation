<?php
    include_once "../resources/templates/header.php";
    include_once "../resources/library/connect.php";
?>

<?php
    $query = "SELECT * FROM lights";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        if($row['status'] == 'off') {
            $green_class = 'btn-green-unactive';
            $red_class = 'btn-red-active';
        } else {
            $green_class = 'btn-green-active';
            $red_class = 'btn-red-unactive';
        }

        echo "
        <div class='table'>
            <div class='cell'>
                <p class='text text-normal text-black'>" . $row['name'] . "</p>
                <p class='text text-small text-faded'>PIN #" . $row['pin'] . "</p>
            </div><div class='btn-cell'>
                <div class='btn-toolbar'>
                    <button class='btn btn-io " . $green_class . "' id='lighton' onclick='turnOn(" . $row['id'] . ")' type='button'>ON</button>
                    <button class='btn btn-io " . $red_class . "' id='lightoff' type='button'>OFF</button>
                </div>
            </div>
        </div>";
    }
?>

<?php
    include_once "../resources/templates/footer.php";
?>
