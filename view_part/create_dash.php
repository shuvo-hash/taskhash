  <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addTaskModalLabel">Add Task</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="task/create_task.php" method="post">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Priority</label>
                          <select class="form-control" name="priority">
                              <option>High</option>
                              <option>Medium</option>
                              <option>Low</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Status</label>
                          <select name="status" class="form-control">
                              <option>To-Do</option>
                              <option>In Progress</option>
                              <option>Completed</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Date</label>
                          <input type="date" name="deadline" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                      </div>

                      <button name="create" type="submit" class="btn btn-primary">Create</button>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>