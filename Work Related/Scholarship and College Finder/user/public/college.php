<?php

    require_once('../include/header.php');

?>


        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                        <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Colleges</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index">Home</a></li>
                                            <li>List of Colleges</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container pb---70"> 

                        <?php

                            $pdo = openDB();
                            $sql = "SELECT * FROM colleges";
                            $stmt = $pdo->query($sql);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            $rowCount = $stmt->rowCount(); 

                        ?>

                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-6">
                                <div class="all__icons">                                   
                                    <div class="result-count">We found <?php echo $rowCount; ?> results for you</div>
                                </div>
                            </div>
                        </div>                                                  
                        <div class="row">
                            
                        
                            <?php

                                $pdo = openDB();
                                $sql = "SELECT * FROM colleges INNER JOIN locations 
                                ON colleges.location_id = locations.location_id";
                                $stmt = $pdo->query($sql);
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                            ?>

                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><?php echo $row['state']; ?>, <?php echo $row['city']; ?></a>
                                        <img src="../../media/<?php echo $row['image_url']; ?>" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="college-detail?id=<?php echo $row['college_id']; ?>"><?php echo $row['name']; ?></a></h4> 
                                        <a class="event__card--link" href="college-detail?id=<?php echo $row['college_id']; ?>"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>

                            <?php

                                }

                            ?>

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
