<?php include_once "../resources/templates/header.php"; ?>
<?php
    if(isset($_POST['LightOn'])) {
        echo exec("sudo python ./python/lighton.py 2>&1", $output);
    }
    if(isset($_POST['LightOff'])) {
        echo exec("sudo python ./python/lightoff.py 2>&1", $output);
    }
?>

<div class="background">
</div>

<div class="jumbotron">
    <div class="jumbotron-title">
        <p class="text text-white text-title">
            Welcome to <strong>OPEN</strong>Automation
        </p>
        <p class="text text-white text-big">
            Easy home automation with the Raspberry Pi.
        </p>
        <a href="dashboard.php" class="btn btn-red btn-round">Get Started</a>
    </div>
</div>
<?php include_once "../resources/templates/footer.php"; ?>
