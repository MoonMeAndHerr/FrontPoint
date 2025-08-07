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

                                    <?php

                                        if(isset($_GET['user'])){

                                    ?>

                                    <form action="../private/login" method="POST">
                                        <div class="login-top">
                                            <h3>Login</h3>
                                            <p>Don't have an account yet? <a href="signup">Sign up for free </a></p>
                                            <p>OR<p>
                                            <p>Login As <a href="index?admin">Admin</a></p>
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
                                        <p>
                                            <label>Email</label>
                                            <input placeholder="Email" type="email" id="email" name="email">
                                        </p>
                                        <p>
                                            <label>Password</label>
                                            <input placeholder="Password" type="password" id="pass" name="password">
                                        </p>

                                        <button type="submit" id="button" name="loginuser">Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>                                      
                                    </form>

                                    <?php

                                        } elseif (isset($_GET['admin'])){

                                    ?>

                                    <form action="../private/login" method="POST">
                                        <div class="login-top">
                                            <h3>Login</h3>
                                            <p>Don't have an account yet? <a href="signup">Sign up for free</a></p>
                                            <p>OR<p>
                                            <p>Login As <a href="index?user">User</a></p>
                                        </div>
                                        <?php

                                            if(isset($_SESSION['fail'])){

                                        ?>

                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $_SESSION['fail']; ?>
                                        </div>

                                        <?php

                                            } unset($_SESSION['fail']);

                                        ?>
                                        <p>
                                            <label>Email</label>
                                            <input placeholder="Email" type="email" id="email" name="email">
                                        </p>
                                        <p>
                                            <label>Password</label>
                                            <input placeholder="Password" type="password" id="pass" name="password">
                                        </p>

 
                                        <button type="submit" id="button" name="loginadmin">Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>                                      
                                    </form>

                                    <?php

                                        } else {

                                    ?>

                                        <script>
                                            window.location.href = 'index?user';
                                        </script>

                                    <?php

                                        }

                                    ?>
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
        