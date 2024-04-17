<?php
include 'partials/_dbconnect.php';

$sql = "SELECT `pname` FROM `patient`;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error" . mysqli_error($conn);
} else {
    echo '<select class="select" name="pname">
    <option>Select</option>';
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <option value="<?php echo $row['pname'] ?>">
            <?php echo $row['pname'] ?>
        </option>

        <?php
    }
    echo '</select>';

}
?>