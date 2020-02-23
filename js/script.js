function editTask(id) {
  $.ajax({
    type: "POST",
    url: "view_part/edit_dash.php",
    data: {
      taskId: id
    },
    success: function(data) {
      $("#editBox").html(data);
      $("#editBox .modal").modal("show");
    }
  });
}
