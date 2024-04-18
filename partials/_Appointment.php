<?php
$sql = "SELECT * FROM `appointment`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td>
            <?php echo $row['pid']; ?>
        </td>
        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt="">
            <?php echo $row['pname']; ?>
        </td>
        <td>
            <?php echo $row['page']; ?>
        </td>
        <td>
            <?php echo $row['dname']; ?>
        </td>
        <td><?php echo $row['dept'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['time'] ?></td>
        <!-- <td><span class="custom-badge status-red">Inactive</span></td> -->
        <td class="text-right">
            <div class="dropdown dropdown-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="edit-appointment.php"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                    <a class="dropdown-item" href="delete-appointment.php?pid=<?php echo $row['pid']; ?>"
                        data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i>
                        Delete</a>
                </div>
            </div>
        </td>
    </tr>
    <?php
}
?>