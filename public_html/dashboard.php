<?php
    include_once "../resources/templates/header.php";
    include_once "../resources/library/connect.php";
?>

<form method="POST">
    <button class="btn btn-green" id="lighton" type="button">Light On</button>
    <button class="btn btn-red" id="lightoff" type="button">Light Off</button>
</form>
<p class="text text-red">The light is: <strong><span class="status">

<?php
    $query = "SELECT * FROM lights";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        echo $row["status"];
    }
?>

</span></strong></p>

<?php
    include_once "../resources/templates/footer.php";
?>
