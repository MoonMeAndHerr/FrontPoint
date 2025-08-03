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
                                    <h4 class="mb-sm-0">View Application</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Application</a></li>
                                            <li class="breadcrumb-item active">All Applications</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

            <div class="card mt-1 shadow">
                <div class="card-header d-flex align-items-center mx-3 mt-2">
                    <h3 class="card-title mb-0 me-3" style="white-space: nowrap;">Applications List</h3>
                    <input type="text" id="staffSearch" class="form-control w-25 ms-3" placeholder="Search...">
                </div>

                <div class="card-body px-4 py-3">
                    <div class="table-responsive">

                        <?php

                            if(isset($_SESSION['success'])){

                        ?>

                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['success']; ?>
                            </div>

                        <?php

                            unset($_SESSION['success']);

                            } elseif(isset($_SESSION['fail'])){

                        ?>

                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['fail']; ?>
                            </div>

                        <?php

                            unset($_SESSION['fail']);

                            }

                        ?>

                        <table class="table table-striped table-bordered mb-0" id="staffTable">
                        <thead class="table-light">
                            <tr>
                            <th>Application ID</th>
                            <th>Applicant Name</th>
                            <th>Applicant Email</th>
                            <th>Scholarship Chose</th>
                            <th>Status</th>
                            <th>Applied At</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $pdo = openDB();
                                $sql = "SELECT * FROM applications a INNER JOIN users u
                                ON a.user_id = u.user_id
                                INNER JOIN scholarships s
                                ON a.scholarship_id = s.scholarship_id";
                                $stmt = $pdo->query($sql);

                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                            <tr>
                            <td><?= htmlspecialchars($row['application_id']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['title']) ?></td>
                            <td><?= htmlspecialchars($row['status']) ?></td>
                            <td><?= htmlspecialchars($row['applied_at']) ?></td>
                            <td>
                                <a href="../private/manage-application?accepted=<?php echo $row['application_id']; ?>"><button type="submit" class="btn btn-success" name="add">Accept</button></a>
                                <a href="../private/manage-application?rejected=<?php echo $row['application_id']; ?>"><button type="submit" class="btn btn-danger" name="add">Reject</button></a>
                            </td>
                            </tr>
                            <?php 
                            
                                }
                            
                            ?>
                        </tbody>
                        </table>
                    </div>


                </div>
            </div>

                    </div> <!-- container-fluid -->           
                </div><!-- End Page-content -->
            <?php include __DIR__ . '/../include/footer.php';?>
        </div><!-- end main content-->

<?php

    require_once('../include/footer.php');
	require_once('../include/themesettings.php');
    require_once('../include/scripts.php');

?>