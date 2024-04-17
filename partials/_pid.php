<?php
include 'partials/_dbconnect.php';

$sql = "SELECT `pid` FROM `patient`;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error" . mysqli_error($conn);
} else {
    echo '<select class="select" name="pid">
    <option>Select</option>';
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <option value="<?php echo $row['pid'] ?>">
            <?php echo $row['pid'] ?>
        </option>

        <?php
    }
    echo '</select>';

}
?>