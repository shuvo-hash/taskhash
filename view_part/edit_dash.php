<?php
require "../function/connect.php";

$task_id = $_POST['taskId'];

$query = "SELECT * FROM task WHERE id = '$task_id' ";

$edit_query = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($edit_query);


?>

<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskModalLabel">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="task/create_task.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input value="<?php echo $row['title']; ?>" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Priority</label>
                        <select class="form-control" name="priority">
                            <option selected disabled><?php echo $row['priority']; ?></option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select name="status" class="form-control">
                            <option selected disabled><?php echo $row['status']; ?></option>
                            <option>To-Do</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deadline</label>
                        <input value="<?php echo $row['deadline']; ?>" type="date" name="deadline" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <button name="create" type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>