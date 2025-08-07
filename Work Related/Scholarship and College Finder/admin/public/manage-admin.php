<?php

	require_once('../include/header.php');
    require_once('../include/navbar.php');

?>

            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Manage Admin</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">All Admin</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php

                        if (isset($_GET['update'])) {

                            $pdo = openDB();
                            $sql = "SELECT * FROM admins WHERE admin_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':id' => $_GET['update']]);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Update Admin</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="../private/manage-admin" method="POST">
                                            <div class="row">

                                                <input type="hidden" name="admin_id" value="<?php echo $row['admin_id']; ?>">

                                                <div class="mb-3">
                                                    <label class="form-label"> Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter name" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter email" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Password <span class="text-danger">*</span></label>
                                                    <input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Enter password" class="form-control">
                                                </div>

                                                <p class="text-muted">
                                                Please fill in the information below. Fields marked with <span class="text-danger">*</span> are required.
                                                </p>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <?php

                        } elseif (isset($_GET['add'])) {

                    ?>

                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Add Admin</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="../private/manage-admin" method="POST">
                                            <div class="row">

                                                <div class="mb-3">
                                                    <label class="form-label"> Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Password <span class="text-danger">*</span></label>
                                                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                                                </div>

                                                <p class="text-muted">
                                                Please fill in the information below. Fields marked with <span class="text-danger">*</span> are required.
                                                </p>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <?php

                        }

                    ?>

                    </div> <!-- container-fluid -->           
                </div><!-- End Page-content -->
            <?php include __DIR__ . '/../include/footer.php';?>
        </div><!-- end main content-->

<?php

    require_once('../include/footer.php');
	require_once('../include/themesettings.php');
    require_once('../include/scripts.php');

?>