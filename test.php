<?php
    $nForms = $_POST["numberOfForms"];
?>

<form method="post">
    <?php
    for ($i = 1; $i <= $nForms; $i++) {
    ?>
        <input name="anything[]" type="text" /><br>
    <?php
    }
    ?>
    <input type="submit"  value="submit" />
</form>