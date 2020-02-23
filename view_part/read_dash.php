<?php
require "function/connect.php";
$query = "SELECT * FROM task";

$read_query = mysqli_query($conn, $query);



?>

<table class="table table table-dark">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Priority</th>
            <th scope="col">Status</th>
            <th scope="col">Deadline</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($read_query)) { ?>

            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['priority']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['deadline']; ?></td>
                <td>
                    <button class="btn btn-link text-primary btn-hover" onclick="editTask(<?php echo $row['id']; ?>)">
                        <i class="material-icons">
                            edit
                        </i>
                    </button>
                    <button class="btn btn-link text-danger btn-hover" onclick="deleteTask">
                        <i class="material-icons">
                            delete
                        </i>
                    </button>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>