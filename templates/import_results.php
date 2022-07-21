<?php
use RaceTracker\Controller\RaceController;

if (isset($_POST['submit'])) {
    $raceController = new RaceController();
    $raceController->handleSubmit($_POST, $_FILES['csv-file']);
}

?>
<form class="import-form" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" onsubmit="return validateInput()">
    <label class="race-name-label" for="race-name" onfocusout="validateInput()">Race name:<br/>
        <input type="text" name="race-name" id="race-name" required><br/>
    </label>
    <label class="date-label" for="date">Choose race date:<br/>
        <input type="date" name="date" id="date" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" required><br/>
    </label>
    <label class="csv-file-label" for="csv-file">Upload csv file:<br/>
        <input type="file" name="csv-file" id="csv-file" required><br/>
    </label>
    <input type="submit" name="submit" id="submit-button" value="Submit"/>
</form>
<script src="public/js/validate.js"></script>