<?php
include 'partials/_dbconnect.php';

$sql = "SELECT `Dname` FROM `doctor`;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error" . mysqli_error($conn);
} else {
    echo '<select class="select" name="dname">
    <option>Select</option>';
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <option value="<?php echo $row['Dname'] ?>">
            <?php echo $row['Dname'] ?>
        </option>

        <?php
    }
    echo '</select>';

}
?>