<?php include "include/header.php"; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#addTaskModal">Add task</button>
            </div>
        </div>
    </div>


    <?php include 'view_part/create_dash.php'; ?>
    <?php include 'view_part/read_dash.php'; ?>

    <div id="editBox">
        <!-- we wil add a modal from a php page dynamically with js -->
    </div>

    </div>
</main>
</div>
</div>

<?php include "include/footer.php"; ?>