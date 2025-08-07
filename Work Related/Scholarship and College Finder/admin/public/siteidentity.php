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
                                    <h4 class="mb-sm-0">Manage Site Identity</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Site Identity</a></li>
                                            <li class="breadcrumb-item active">Site Related</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                    
                    <?php

                        $pdo = openDB();
                        $stmt = $pdo->prepare("SELECT * FROM site_identity WHERE identity_id = '1'");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    ?>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Update Site Identity</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="../private/siteidentity" method="POST" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="mb-3">
                                                    <label class="form-label"> Site Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="sitename" value="<?php echo $row['site_name']; ?>" placeholder="Enter website name" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Description <span class="text-danger">*</span></label>
                                                    <input type="text" name="sitedesc" value="<?php echo $row['description']; ?>" placeholder="Enter website description" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Site Logo <span class="text-danger">*</span></label>
                                                    <input type="file" name="sitelogo"  accept="image/*" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Site Favicon <span class="text-danger">*</span></label>
                                                    <input type="file" name="sitefavicon" accept="image/*" class="form-control">
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

                    </div> <!-- container-fluid -->           
                </div><!-- End Page-content -->
            <?php include __DIR__ . '/../include/footer.php';?>
        </div><!-- end main content-->

<?php

    require_once('../include/footer.php');
	require_once('../include/themesettings.php');
    require_once('../include/scripts.php');

?>