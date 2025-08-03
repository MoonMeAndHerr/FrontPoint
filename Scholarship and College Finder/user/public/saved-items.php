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
                                    <h1 class="breadcrumbs-title">Saved Item</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index">Home</a></li>
                                            <li>Saved Item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <div class="react-upcoming__event react-upcoming__event_page blog__area pt---100 pb---112">
                    <div class="container">  
                        <div class="row align-items-center back-vertical-middle shorting__course3 mb-50">
                            <div class="col-md-12">
                                <div class="all__icons">                                   
                                    <div class="result-count">Saved Items for College</div> 
                                </div>
                                        <?php

                                            if(isset($_SESSION['fail'])){

                                        ?>

                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $_SESSION['fail']; ?>
                                        </div>

                                        <?php

                                            unset($_SESSION['fail']);

                                            } elseif(isset($_SESSION['success'])){

                                        ?>

                                        <div class="alert alert-success" role="alert">
                                            <?php echo $_SESSION['success']; ?>
                                        </div>

                                        <?php

                                            } unset($_SESSION['success']);

                                        ?>
                            </div>
                        </div>                      
                        <div class="row">
                            

                            <?php

                                $pdo = openDB();
                                $sql = "SELECT * FROM saved_items INNER JOIN colleges ON saved_items.item_id = colleges.college_id INNER JOIN locations ON colleges.location_id = locations.location_id";
                                $stmt = $pdo->query($sql);
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                            ?>

                            <div class="col-lg-3">
                                <div class="event__card">
                                    <div class="event__card--content">
                                        <div class="event__card--content-area">
                                            <div class="event_time"><?php echo $row['created_at']; ?></div>
                                            <h3 class="event__card--title"><a href="#"><?php echo $row['name']; ?></a></h3>
                                            <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><?php echo $row['state']; ?>, <?php echo $row['city']; ?></div>
                                            <a class="event__card--link" href="../private/saved-items?delete=<?php echo $row['saved_id']; ?>"> Remove Item <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                }

                            ?>

                            <div class="row align-items-center back-vertical-middle shorting__course3 mb-50">
                                <div class="col-md-12">
                                    <div class="all__icons">                                   
                                        <div class="result-count">Saved Items for Scholarships</div> 
                                    </div>
                                </div>
                            </div>  
                            
                                <?php

                                    $pdo = openDB();
                                    $sql = "SELECT * FROM saved_items INNER JOIN scholarships ON saved_items.item_id = scholarships.scholarship_id INNER JOIN locations ON scholarships.location_id = locations.location_id";
                                    $stmt = $pdo->query($sql);
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                                ?>

                                <div class="col-lg-3">
                                    <div class="event__card">
                                        <div class="event__card--content">
                                            <div class="event__card--content-area">
                                                <div class="event_time"><?php echo $row['created_at']; ?></div>
                                                <h3 class="event__card--title"><a href="#"><?php echo $row['title']; ?></a></h3>
                                                <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><?php echo $row['state']; ?>, <?php echo $row['city']; ?></div>
                                                <a class="event__card--link" href="../private/saved-items?delete=<?php echo $row['saved_id']; ?>"> Remove Item <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php

                                    }

                                ?>

                        </div>                   
                    </div>
                </div>
                                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

<?php

    require_once('../include/footer.php');

?>