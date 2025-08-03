<?php

    require_once('../include/header.php');

    $pdo = openDB();
    $sql = "SELECT * FROM colleges INNER JOIN locations ON colleges.location_id = locations.location_id WHERE college_id = :college_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'college_id' => $_GET['id']
    ]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC)

?>

        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs">
                        <img class="mobile" src="assets/images/breadcrumbs/22.jpg" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <a href="#" class="cate">College</a>
                                    <h1 class="breadcrumbs-title"><?php echo $row['name']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="back__course__page_grid react-courses__single-page pb---16 pt---110">
                    <div class="container pb---70">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="course-single-tab">
                                    <ul class="nav nav-tabs" id="back-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="description" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                        </li>                                                                              
                                    </ul>
                                    <div class="tab-content" id="back-tab-content">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description">
                                            <h3>About This College</h3>
                                            <p><?php echo $row['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mt-60">
                                <div class="react-sidebar react-back-course2 ml----30">                                                                        
                                    <div class="widget get-back-course">                                                                             
                                        <ul class="price__course">
                                            <li> <i class="icon_profile"></i> Located At <b><?php echo $row['state']; ?></b></li>
                                            <li><i class="icon_tag_alt"></i> Situated At <b><?php echo $row['city']; ?></b></li>
                                            <li> <i class="icon_group"></i> Website URL <b><?php echo $row['website']; ?></b></li>
                                            <li><i class="icon_clock_alt"></i> Created At <b><?php echo $row['created_at']; ?></b></li>
                                        </ul>
                                        <a href="../private/saved-items?college=<?php echo $row['college_id']; ?>" class="start-btn">Add To Saved Items<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

<?php

    require_once('../include/footer.php');

?>