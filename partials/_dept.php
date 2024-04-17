<?php
include 'partials/_dbconnect.php';

$sql = "SELECT `dept_name` FROM `dept`;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error" . mysqli_error($conn);
} else {
    echo '<select class="select" name="dept">
    <option>Select</option>';
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <option value="<?php echo $row['dept_name']?>"><?php echo $row['dept_name']?></option>

        <?php
    }
    echo '</select>';

}
?>