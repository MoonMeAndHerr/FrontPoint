<?php

    require_once('../include/header.php');

?>

        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">  
                <div class="react-login-page react-signup-page pt---120 pb---120">
                    <div class="container">
                        <div class="row">                            
                            <div class="col-lg-12">
                                <div class="login-right-form">
                                    <form method="POST" action="../private/signup">
                                        <div class="login-top">
                                            <h3>Sign Up</h3>
                                            <p>Already have an account? <a href="index">Log in</a></p>
                                        </div>
                                        <?php

                                            if(isset($_SESSION['fail'])){

                                        ?>

                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $_SESSION['fail']; ?>
                                        </div>

                                        <?php

                                            unset($_SESSION['fail']);

                                            } 

                                        ?>
                                        <p>
                                            <label>Email</label>
                                            <input placeholder="Email" type="email" id="email" name="email" required>
                                        </p>
                                        <p>
                                            <label>Full Name</label>
                                            <input placeholder="User Name" type="text" id="email" name="name" required>
                                        </p>
                                        <p>
                                            <label>Password</label>
                                            <input placeholder="Password" type="password" id="pass" name="password" required>
                                        </p>
                                        <p>
                                            <label>Confirm Password</label>
                                            <input placeholder="Confirm Password" type="password" id="pass" name="repassword" required>
                                        </p>
                                        <div class="back-check-box">
                                            <input type="checkbox" id="box-1" required> I agree to the <em>Terms & Conditions</em>
                                            <p></p>
                                        </div>
                                        <button type="submit" id="button" name="regUser">Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>                                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

<?php

    require_once('../include/footer.php');

?>