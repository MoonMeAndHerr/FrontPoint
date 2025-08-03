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
                                    <h4 class="mb-sm-0">Manage College</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">College</a></li>
                                            <li class="breadcrumb-item active">All Colleges</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php

                        if (isset($_GET['update'])) {

                            $pdo = openDB();
                            $sql = "SELECT * FROM colleges WHERE college_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':id' => $_GET['update']]);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Update College</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="../private/manage-college" method="POST" enctype="multipart/form-data">
                                            <div class="row">

                                                <input type="hidden" name="college_id" value="<?php echo $row['college_id']; ?>">

                                                <div class="mb-3">
                                                    <label class="form-label"> College Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter college name">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Description <span class="text-danger">*</span></label>
                                                    <textarea name="description" class="form-control" rows="3" value="<?php echo $row['description']; ?>" placeholder="Enter college description"><?php echo $row['description']; ?></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Website <span class="text-danger">*</span></label>
                                                    <input type="text" name="website" value="<?php echo $row['website']; ?>" class="form-control" placeholder="Enter website URL">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Image </label>
                                                    <input type="file" name="image"  accept="image/*" class="form-control">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label"> Location <span class="text-danger">*</span></label>
                                                    <select name="location" class="form-select mb-3">

                                                        <?php

                                                            $pdo = openDB();
                                                            $sql = "SELECT * FROM locations";
                                                            $stmt = $pdo->prepare($sql);
                                                            $stmt->execute();
                                                            
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>

                                                        <option value="<?php echo $row['location_id']; ?>" <?php if ($row['location_id'] == $_GET['update']) echo 'selected'; ?>><?php echo $row['state']; ?>, <?php echo $row['city']; ?></option>

                                                        <?php

                                                            }

                                                        ?>
                                                    </select>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add College</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="../private/manage-college" method="POST" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="mb-3">
                                                    <label class="form-label"> College Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter college name">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Description <span class="text-danger">*</span></label>
                                                    <textarea name="description" class="form-control" rows="3"  placeholder="Enter college description"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Website <span class="text-danger">*</span></label>
                                                    <input type="text" name="website" class="form-control" placeholder="Enter website URL">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"> Image <span class="text-danger">*</span></label>
                                                    <input type="file" name="image"  accept="image/*" required class="form-control">
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label"> Location <span class="text-danger">*</span></label>
                                                    <select name="location" class="form-select mb-3" >

                                                        <?php

                                                            $pdo = openDB();
                                                            $sql = "SELECT * FROM locations";
                                                            $stmt = $pdo->prepare($sql);
                                                            $stmt->execute();
                                                            
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>

                                                        <option value="<?php echo $row['location_id']; ?>"><?php echo $row['state']; ?>, <?php echo $row['city']; ?></option>

                                                        <?php

                                                            }

                                                        ?>
                                                    </select>
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